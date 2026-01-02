document.addEventListener('DOMContentLoaded', function () {
    const urlParams = new URLSearchParams(window.location.search);

    // Verifica el estado del formulario
    const formStatus = urlParams.get('form_status');

    switch (formStatus) {
        case 'success':
            Swal.fire({
                title: "Message Sent!",
                text: "Thank you for reaching out. We will get back to you soon.",
                icon: "success"
            });
            break;

        case 'error':
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
                footer: '<a href="pages/faqs.html">Why do I have this issue?</a>'
            });
            break;

        case 'missing':
            Swal.fire({
                title: "Are there any fields left unfilled?",
                text: "Please fill in all required fields before submitting.",
                icon: "warning",
                confirmButtonText: "OK"
            });
            break;

        case 'captcha_error':
            Swal.fire({
                title: "Captcha Not Verified",
                text: "Please complete the captcha verification before submitting.",
                icon: "warning",
                confirmButtonText: "OK"
            });
            break;

        default:
            // Maneja estados desconocidos o faltantes (opcional)
            if (formStatus) {
                console.warn("No valid form_status provided: " + formStatus);
            }
            break;
    }
});


// Logic for Conditional Fields in Contact Form
// Logic for Conditional Fields in Contact Form
const serviceSelect = document.getElementById('service');
const deliveryFields = document.getElementById('delivery-fields');
const deliveryAddress = document.getElementById('deliveryAddress');
const storeName = document.getElementById('storeName');
const deliveryNote = document.getElementById('delivery-note');

if (serviceSelect && deliveryFields) {
    serviceSelect.addEventListener('change', function () {
        if (this.value === 'Request a Delivery') {
            deliveryFields.classList.remove('d-none');
            if (deliveryNote) deliveryNote.classList.remove('d-none');
            // Make fields required when visible
            deliveryAddress.setAttribute('required', 'required');
            storeName.setAttribute('required', 'required');
        } else {
            deliveryFields.classList.add('d-none');
            if (deliveryNote) deliveryNote.classList.add('d-none');
            // Remove required when hidden
            deliveryAddress.removeAttribute('required');
            storeName.removeAttribute('required');
            // Clear values when hidden (optional, but good UX)
            deliveryAddress.value = '';
            storeName.value = '';
        }
    });
}
