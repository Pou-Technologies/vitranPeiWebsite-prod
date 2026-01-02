<!-- Heater -->
<?php
$pageTitle = "Vitran - Delivery Services"; // Define el título de la página
include 'includes/header.php';
?>

<!-- Hero -->
<?php
include 'includes/hero.php';
?>


<main class="container my-5">

  <!-- DELIVERY SERVICES -->
  <section class="py-5 mt-5 mb-5 bg-white" id="what-we-deliver">
    <div class="container text-center">
      <h2 class="display-3 mb-4 fw-bold text-black">Our Delivery Services</h2>
      <p class="mb-5">From your favorite meals to urgent essentials — we've got you covered.</p>

      <div class="row g-4">

        <!-- Card 1 -->
        <div class="col-12 col-sm-6 col-md-4">
          <div class="p-4 border rounded h-100 shadow-sm card-hover">
            <i class="bi bi-cup-hot-fill service-icon text-blue-vitran"></i>
            <h6 class="mt-3 fw-bold text-black">Food & Drinks</h6>
            <p class="small">Cravings? We'll grab your favorite meal or coffee from any spot in town.</p>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col-12 col-sm-6 col-md-4">
          <div class="p-4 border rounded h-100 shadow-sm card-hover">
            <i class="bi bi-capsule-pill service-icon text-green-vitran"></i>
            <h6 class="mt-3 fw-bold text-black">Medicine</h6>
            <p class="small">Forgot your prescription? We'll deliver from any local pharmacy.</p>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col-12 col-sm-6 col-md-4">
          <div class="p-4 border rounded h-100 shadow-sm card-hover">
            <i class="bi bi-bag-fill service-icon text-yellow-vitran"></i>
            <h6 class="mt-3 fw-bold text-black">Personal Shopping</h6>
            <p class="small">We’ll go to the store, pick up what you need, and bring it to your door.</p>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="col-12 col-sm-6 col-md-4">
          <div class="p-4 border rounded h-100 shadow-sm card-hover">
            <i class="bi bi-gift-fill service-icon text-red-vitran"></i>
            <h6 class="mt-3 fw-bold text-black">Gift Delivery</h6>
            <p class="small">Need a last-minute gift? We’ll deliver it straight to their door.</p>
          </div>
        </div>

        <!-- Card 5 (Pet Food) -->
        <div class="col-12 col-sm-6 col-md-4">
          <div class="p-4 border rounded h-100 shadow-sm card-hover">
            <i class="bi bi-heart-fill service-icon text-orange-vitran"></i>
            <h6 class="mt-3 fw-bold text-black">Pet Food & Supplies</h6>
            <p class="small">Running low on pet food or supplies? We'll bring it right to your doorstep.</p>
          </div>
        </div>

        <!-- Card 6 (Documents & Parcels) -->
        <div class="col-12 col-sm-6 col-md-4">
          <div class="p-4 border rounded h-100 shadow-sm card-hover">
            <i class="bi bi-envelope-fill service-icon text-lightblue-vitran"></i>
            <h6 class="mt-3 fw-bold text-black">Documents & Parcels</h6>
            <p class="small">Urgent paperwork or small packages? We’ll deliver them safely and quickly.</p>
          </div>
        </div>

        <!-- Button centered below cards -->
        <div class="d-flex justify-content-center flex-wrap py-4">
          <a href="/views/services.php" class="btn btn-outline-primary ms-1">Learn More</a>
        </div>
      </div>
    </div>
  </section>





  <!-- HOW IT WORKS -->

  <section class="py-5 mt-5 mb-5 bg-light border rounded" id="how-it-works">
    <div class="container text-center">
      <h2 class=" display-3 mb-4 fw-bold text-black">How It Works</h2>
      <p class="mb-5">Getting your delivery is as easy as 1-2-3. Simple, fast, and reliable.</p>
      <div class="row g-4">

        <div class="col-md-4">
          <div class="">
            <div class="mb-3 text-primary">
              <div>
                <i class="bi bi-1-circle-fill service-icon text-blue-vitran"></i>
              </div>
              <i class="bi bi-car-front-fill service-icon text-blue-vitran"></i>
            </div>
            <h5 class="fw-bold text-black">Place Your Order</h5>
            <p>Use our website or call us to request what you need — food, medicine, or anything else.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="h-100">
            <div class="mb-3 text-success">
              <div>
                <i class="bi bi-2-circle-fill service-icon text-green-vitran"></i>
              </div>
              <i class="bi bi-bag-fill service-icon text-green-vitran"></i>
            </div>
            <h5 class="fw-bold text-black"> We Get It</h5>
            <p>Our delivery partner picks it up or buys it for you quickly and safely.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="h-100">
            <div class="mb-3 text-danger">
              <div>
                <i class="bi bi-3-circle-fill service-icon text-yellow-vitran"></i>
              </div>
              <i class="bi bi-house-door-fill service-icon text-yellow-vitran"></i>
            </div>
            <h5 class="fw-bold text-black"> Delivered to You</h5>
            <p class="mb-5">We bring it right to your door — fast, simple, and reliable.</p>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- WHY CHOOSE US -->
  <section class="custom-padding ">
    <div class="">
      <div class="row align-items-center px-0">

        <!-- Texto e íconos -->
        <div class="col-md-6 ">
          <h2 class="fw-bold mb-4 text-black">Why Choose Us?</h2>
          <ul class="list-unstyled">
            <li class="d-flex mb-3">
              <i class="bi bi-check-circle-fill text-primary me-3 fs-4 "></i>
              <div>
                <h3 class="fw-bold mb-1">Fast & Reliable Delivery</h6>
                  <p class="mb-0">We ensure your orders arrive on time, every time.</p>
              </div>
            </li>
            <li class="d-flex mb-3">
              <i class="bi bi-shield-lock-fill text-primary me-3 fs-4"></i>
              <div>
                <h3 class="fw-bold mb-1">Secure & Trusted</h6>
                  <p class="mb-0">Your information and orders are always safe with us.</p>
              </div>
            </li>
            <li class="d-flex mb-3">
              <i class="bi bi-geo-alt-fill text-primary me-3 fs-4"></i>
              <div>
                <h3 class="fw-bold mb-1">Local Knowledge</h6>
                  <p class="mb-0">We know the area well, so we deliver efficiently.</p>
              </div>
            </li>
            <li class="d-flex">
              <i class="bi bi-person-heart text-primary me-3 fs-4"></i>
              <div>
                <h3 class="fw-bold mb-1">Personalized Service</h6>
                  <p class="mb-0">We care about each delivery and every customer.</p>
              </div>
            </li>
          </ul>
        </div>

        <!-- Imagen -->
        <div class="col-md-6 px-0">
          <img src="/images/general/whyChooseUs.png" alt="Delivery Team" class="img-fluid ms-md-4">
        </div>
      </div>
    </div>
  </section>

</main>



<!-- TESTIMONIALS -->

<section class="testimonial-section">
  <div class="content-wrapper text-center">
    <h2 class="fw-bold mb-5 text-black">What Our Clients Say</h2>
    <p class="mb-5">Our clients trust us</p>

    <div class="row g-4">
      <!-- Testimonio 1 -->
      <div class="col-md-4">
        <div class="border rounded p-4 shadow-sm h-100">
          <div class="text-warning mb-3">
            <i class="bi bi-star-fill me-1"></i>
            <i class="bi bi-star-fill me-1"></i>
            <i class="bi bi-star-fill me-1"></i>
            <i class="bi bi-star-fill me-1"></i>
            <i class="bi bi-star-fill"></i>
          </div>
          <p class="mb-4 text-black">"Excellent service! Fast, friendly, and super reliable. I’ll definitely use them
            again."</p>
          <div class="d-flex align-items-center">
            <img src="/images/general/clients/1.png" alt="Client 1" class="rounded-circle me-3"
              style="width: 50px; height: 50px; object-fit: cover;">
            <span class="fw-bold">Jane Doe</span>
          </div>
        </div>
      </div>

      <!-- Testimonio 2 -->
      <div class="col-md-4">
        <div class="border rounded p-4 shadow-sm h-100">
          <div class="text-warning mb-3">
            <i class="bi bi-star-fill me-1"></i>
            <i class="bi bi-star-fill me-1"></i>
            <i class="bi bi-star-fill me-1"></i>
            <i class="bi bi-star-fill me-1"></i>
            <i class="bi bi-star-fill"></i>
          </div>
          <p class="mb-4 text-black">"They really care about delivering on time. Great communication too!"</p>
          <div class="d-flex align-items-center">
            <img src="/images/general/clients/2.png" alt="Client 2" class="rounded-circle me-3"
              style="width: 50px; height: 50px; object-fit: cover;">
            <span class="fw-bold">Mark Smith</span>
          </div>
        </div>
      </div>

      <!-- Testimonio 3 -->
      <div class="col-md-4">
        <div class="border rounded p-4 shadow-sm h-100">
          <div class="text-warning mb-3">
            <i class="bi bi-star-fill me-1"></i>
            <i class="bi bi-star-fill me-1"></i>
            <i class="bi bi-star-fill me-1"></i>
            <i class="bi bi-star-fill me-1"></i>
            <i class="bi bi-star-fill"></i>
          </div>
          <p class="mb-4 text-black">"The team is super professional and always ready to help. Highly recommended!"</p>
          <div class="d-flex align-items-center">
            <img src="/images/general/clients/3.png" alt="Client 3" class="rounded-circle me-3"
              style="width: 50px; height: 50px; object-fit: cover;">
            <span class="fw-bold">Emily Johnson</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Last section -->

<section class="custom-padding text-white text-center">
  <div class="container">
    <h2 class="display-5 fw-bold mb-3 text-black">Ready for your first delivery?</h2>
    <p class="lead mb-4 text-black ">Fast, reliable, and personalized service — just a click away.
      Let us take care of it!</p>
    <div class="d-flex justify-content-center gap-3 flex-wrap">

      <a href="/views/contact.php" class="btn btn-outline-primary btn-lg text-black">
        Contact Us
      </a>
    </div>
  </div>
</section>

</main>





<!-- Cookie Banner -->
<div id="cookie-banner" class="cookie-banner">
  <div class="cookie-content">
    <p class="cookie-message">
      <strong>We care about your privacy</strong><br>
      This website uses cookies for functionality, analytics and marketing.
      By accepting, you agree to our
      <a href="/privacy" target="_blank" class="cookie-link">Cookie Policy</a>.
    </p>
    <div class="cookie-buttons">
      <button id="accept-cookies" class="cookie-button accept">Accept</button>
      <button id="decline-cookies" class="cookie-button decline">Decline</button>
    </div>
  </div>
</div>





<!-- Footer -->
<?php
include 'includes/footer.php';
?>