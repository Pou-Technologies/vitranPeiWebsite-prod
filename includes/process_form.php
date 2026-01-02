<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recolecta los datos del formulario
    $firstName = isset($_POST['firstName']) ? htmlspecialchars(trim($_POST['firstName'])) : '';
    $lastName = isset($_POST['lastName']) ? htmlspecialchars(trim($_POST['lastName'])) : '';
    $email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
    $phone = isset($_POST['phone']) ? htmlspecialchars(trim($_POST['phone'])) : '';
    $service = isset($_POST['service']) ? htmlspecialchars(trim($_POST['service'])) : '';
    $message = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : '';

    // Campos condicionales
    $deliveryAddress = isset($_POST['deliveryAddress']) ? htmlspecialchars(trim($_POST['deliveryAddress'])) : '';
    $storeName = isset($_POST['storeName']) ? htmlspecialchars(trim($_POST['storeName'])) : '';
    $deliveryInstructions = isset($_POST['deliveryInstructions']) ? htmlspecialchars(trim($_POST['deliveryInstructions'])) : '';

    // Verifica que los campos obligatorios no estén vacíos
    if (empty($firstName) || empty($lastName) || empty($email) || empty($phone) || empty($service) || empty($message)) {
        header("Location: ../views/contact.php?form_status=missing_fields");
        exit();
    }

    // Validar reCAPTCHA
    $captcha = $_POST['g-recaptcha-response'] ?? '';
    if (empty($captcha)) {
        header("Location: ../views/contact.php?form_status=captcha_missing");
        exit();
    }

    // Validar el token con la API de Google
    $secretKey = '6Lfx478rAAAAAEz1rEex4Kop5GE0ST_btTXdaVqw'; // Reemplaza con tu clave secreta
    $url = "https://www.google.com/recaptcha/api/siteverify";
    $data = [
        'secret' => $secretKey,
        'response' => $captcha,
        'remoteip' => $_SERVER['REMOTE_ADDR'] // Agrega la IP del usuario para mayor seguridad
    ];

    $options = [
        'http' => [
            'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data),
        ],
    ];
    $context = stream_context_create($options);
    $response = file_get_contents($url, false, $context);

    if ($response === false) {
        // Error al conectar con la API de reCAPTCHA
        header("Location: ../views/contact.php?form_status=captcha_connection_error");
        exit();
    }

    $responseKeys = json_decode($response, true);

    if (!$responseKeys["success"]) {
        // reCAPTCHA no fue validado
        header("Location: ../views/contact.php?form_status=captcha_error");
        exit();
    }

    // Procesar el formulario (enviar correo, etc.)

    // Detectar entorno para definir destinatario
    $serverName = $_SERVER['SERVER_NAME'];

    // Si estamos en QA (subdominio qa. o qa404) o en local (localhost)
    if (strpos($serverName, 'qa.') !== false || strpos($serverName, 'qa404') !== false || strpos($serverName, 'localhost') !== false) {
        $to = "test@poutechnologies.com";
    } else {
        // Producción
        $to = "contact@vitranpei.com";
    }

    $subject = "New message from the form: $service ($serverName)";

    // Boundary para separar partes del correo
    $boundary = md5(time());

    // Headers generales
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

    // Cuerpo del mensaje (texto plano)
    $messageBody = "--$boundary\r\n";
    $messageBody .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $messageBody .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $messageBody .= "First Name: $firstName\n";
    $messageBody .= "Last Name: $lastName\n";
    $messageBody .= "Email: $email\n";
    $messageBody .= "Phone: $phone\n";
    $messageBody .= "Service: $service\n";

    if (!empty($deliveryAddress)) {
        $messageBody .= "Delivery Address: $deliveryAddress\n";
    }
    if (!empty($storeName)) {
        $messageBody .= "Store Name: $storeName\n";
    }
    if (!empty($deliveryInstructions)) {
        $messageBody .= "Delivery Instructions: $deliveryInstructions\n";
    }

    $messageBody .= "Message:\n$message\n\r\n";

    // Manejo del archivo adjunto
    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['image']['tmp_name'];
        $fileName = $_FILES['image']['name'];
        $fileType = $_FILES['image']['type'];

        // Leer contenido del archivo
        $fileContent = file_get_contents($fileTmpPath);
        $chunkedContent = chunk_split(base64_encode($fileContent));

        // Adjuntar archivo al cuerpo del correo
        $messageBody .= "--$boundary\r\n";
        $messageBody .= "Content-Type: $fileType; name=\"$fileName\"\r\n";
        $messageBody .= "Content-Transfer-Encoding: base64\r\n";
        $messageBody .= "Content-Disposition: attachment; filename=\"$fileName\"\r\n\r\n";
        $messageBody .= $chunkedContent . "\r\n";
    }

    // Cerrar el boundary
    $messageBody .= "--$boundary--";

    // Enviar el correo
    if (mail($to, $subject, $messageBody, $headers)) {
        header("Location: ../views/contact.php?form_status=success");
    } else {
        header("Location: ../views/contact.php?form_status=mail_error");
    }
    exit();
} else {
    // Si no es una solicitud POST, redirige al formulario
    header("Location: ../views/contact.php");
    exit();
}
?>