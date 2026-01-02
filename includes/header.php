<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
  <meta charset="UTF-8">
  <!-- META -->
  <meta name="description"
    content="Delivery services in Charlottetown, PEI. Vitran PEI offers tailored deliver solutions for homes and businesses. Ask your first delivery today!">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Pou Technologies, all rights reserved">
  <meta name="theme-color" content="">
  <title><?php echo isset($pageTitle) ? $pageTitle : "Vitran PEI | Delivery Services in PEI"; ?></title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="/images/favicon/favicon.ico" type="image/x-icon">

  <!-- Schema Markup para SEO local -->
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "Vitran Delivery Services",
      "image": "https://www.tudominio.com/images/logo.png",
      "description": "Delivery services in Charlottetown, PEI.",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "123 Main St",
        "addressLocality": "Charlottetown",
        "addressRegion": "PE",
        "postalCode": "C1A 1A1",
        "addressCountry": "CA"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": "46.2382",
        "longitude": "-63.1311"
      },
      "telephone": "+1-902-916-3226",
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday",
        ],
        "opens": "08:00",
        "closes": "17:00"
      },
      "url": "https://www.vitranpei.com"
    }
    </script>
  <!-- Fin del Schema Markup -->


  <!-- Google tag (gtag.js) -->

  <script async src="https://www.googletagmanager.com/gtag/js?id=G-4S7VRD0E27"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-4S7VRD0E27');
  </script>



  <!-- ICONS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <!-- SweetAlert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,600;0,700;1,900&family=Rubik+Vinyl&display=swap"
    rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- CSS Stylesheet -->
  <link rel="stylesheet" href="../style/css/css.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>

<body>

  <!-- Test Site Banner -->
  <!-- <div id="test-banner" class="test-banner">
    <div class="test-banner-content">
        <p>
            ⚠️ This website is currently in **testing phase** and may experience errors. 
            Please navigate with caution.
        </p>
        <button id="close-test-banner" class="btn-close">Close</button>
    </div>
</div> -->


  <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-absolute w-100 site-navbar">
    <div class="container">
      <a class="navbar-brand" href="/index.php">
        <img src="/images/logo/bl.png" alt="Vitran Logo" class="img-fluid site-logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto site-nav">
          <li class="nav-item"><a class="nav-link text-black" href="/index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link text-black" href="/views/services.php">Services</a></li>
          <li class="nav-item"><a class="nav-link text-black" href="/views/contact.php">Contact</a></li>
          <li class="nav-item"><a class="nav-link text-black" href="/views/about.php">About</a></li>
        </ul>
      </div>
    </div>
  </nav>



</body>

</html>