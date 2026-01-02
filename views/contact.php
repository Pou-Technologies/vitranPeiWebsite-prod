<?php
$pageTitle = "Contact"; // Define el título de la página
include '../includes/header.php';
?>






<section class="py-5 contact-hero-section" style="background-image: url('/images/general/contactBgForm.png');">
  <div class="container h-100 d-flex flex-column justify-content-center py-5">
    <!-- Hero Section -->
    <section class="contact-hero text-center">
      <div class="container">
        <h1 class="mb-4 text-black fw-bold">Contact Us</h1>
        <p class="lead text-secondary">We'd love to hear from you! Get in touch for inquiries, questions, or feedback.
        </p>
      </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-section text-center">
      <div class="container">
        <main class="py-5 w-100 d-flex justify-content-center">
          <div class="col-lg-8 col-md-10 col-sm-12">
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/contact-form.php'; ?>
          </div>
        </main>
      </div>
    </section>
  </div>
</section>


<section class="contact-info-section text-white d-flex align-items-center">
  <div class="container">

    <!-- Cuadro actual de contacto -->
    <div class="row justify-content-end mb-4">
      <div class="col-md-6">
        <div class="contact-info-right p-4 bg-opacity-75 rounded shadow-lg">
          <h2 class="mb-4 fw-bold text-uppercase border-bottom pb-2 text-black">Get in Touch</h2>
          <ul class="list-unstyled">
            <li class="mb-3 d-flex align-items-center">
              <i class="bi bi-telephone-fill me-3 fs-5 text-primary"></i>
              <span class="text-black"><strong>Phone:</strong> (902) 916-3226</span>
            </li>
            <li class="mb-3 d-flex align-items-center">
              <i class="bi bi-envelope-fill me-3 fs-5 text-primary"></i>
              <span class="text-black"><strong>Email:</strong> contact@vitranpei.com</span>
            </li>
            <li class="mb-3 d-flex align-items-center">
              <i class="bi bi-geo-alt-fill me-3 fs-5 text-primary"></i>
              <span class="text-black"><strong>Address:</strong> Charlottetown, PEI</span>
            </li>
            <li class="mb-3 d-flex align-items-center">
              <i class="bi bi-clock-fill me-3 fs-5 text-primary"></i>
              <span class="text-black"><strong>Hours:</strong> Mon - Fri: 6:00 AM - 12:00 PM</span>
            </li>
            <div class="py-3">
              <a href="tel:1234567890" class="btn btn-success btn-lg">
                <i class="bi bi-telephone-forward-fill me-2"></i>Call Now
              </a>
            </div>
          </ul>
        </div>
      </div>
    </div>

    <!-- Cuadro de anuncios -->
    <div class="row justify-content-end">
      <div class="col-md-6">
        <div class="p-4 bg-opacity-75 rounded shadow-lg">
          <h2 class="mb-4 fw-bold text-uppercase border-bottom pb-2 text-black">Announcements</h2>
          <h3 class="text-black fw-bold"><i class="bi bi-geo-alt-fill me-3 fs-5 text-primary"></i>Summerside:</h3>
          <p class="text-black">Delivery every Tuesday and Thursday. </p>
        </div>
      </div>
    </div>

  </div>
</section>














<?php include '../includes/footer.php'; ?>