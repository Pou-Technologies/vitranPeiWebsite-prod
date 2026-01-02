<!-- Recaptcha Scripts -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
    function onSubmit(token) {
        document.getElementById("contactForm").submit();
    }
</script>

<div class="contact-form-wrapper">
    <div class="contact-form  p-4 rounded shadow">
        <h2 class="text-center mb-4 text-black ">Get in Touch</h2>
        <form action="/includes/process_form.php" method="POST" id="contactForm" enctype="multipart/form-data">
            <div class="row gy-3">
                <div class="col-md-6 col-12">
                    <label for="firstName" class="form-label text-black">First Name</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" required>
                </div>
                <div class="col-md-6 col-12">
                    <label for="lastName" class="form-label text-black">Last Name</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" required>
                </div>
                <div class="col-md-6 col-12">
                    <label for="phone" class="form-label text-black">Phone</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required>
                </div>
                <div class="col-md-6 col-12">
                    <label for="email" class="form-label text-black">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="col-12">
                    <label for="service" class="form-label">Service</label>
                    <select class="form-select" id="service" name="service" required>
                        <option value="" disabled selected>Select a service</option>
                        <option value="Request a Delivery">Request a Delivery</option>
                        <option class="text-black" value="Moving">Moving</option>
                        <option value="Ride">Ride</option>
                        <option value="Same day delivery">Same day delivery</option>
                        <option value="Delivery for Businesses">Delivery for Businesses</option>
                        <option value="Scheduled Shipments">Scheduled Shipments</option>
                    </select>
                </div>

                <!-- Conditional Fields for Request a Delivery -->
                <div id="delivery-fields" class="d-none row gy-3">
                    <div class="col-12">
                        <label for="deliveryAddress" class="form-label text-black">Delivery Address</label>
                        <input type="text" class="form-control" id="deliveryAddress" name="deliveryAddress"
                            placeholder="123 Main St, Charlottetown">
                    </div>
                    <div class="col-12">
                        <label for="storeName" class="form-label text-black">Store/Restaurant Name</label>
                        <input type="text" class="form-control" id="storeName" name="storeName"
                            placeholder="e.g. Walmart, McDonald's">
                    </div>
                    <div class="col-12">
                        <label for="deliveryInstructions" class="form-label text-black">Delivery Instructions</label>
                        <textarea class="form-control" id="deliveryInstructions" name="deliveryInstructions" rows="3"
                            placeholder="e.g. Leave at front door, buzz 101"></textarea>
                    </div>
                    <div class="col-12">
                        <div id="delivery-note" class="alert alert-info d-none mb-0" role="alert">
                            <i class="bi bi-info-circle-fill me-2"></i>
                            Note: Before proceeding with the delivery, we will contact you to validate your details.
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <label for="message" class="form-label text-black">How can we help you?</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <div class="col-12">
                    <label for="image" class="form-label text-black">Attach an Image (optional)</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*">
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <label class="form-check-label" for="acceptTerms">
                            <input class="form-check-input " type="checkbox" id="acceptTerms" required>
                            I accept the <a href="/privacy.php" target="_blank">terms and conditions</a>
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <button class="g-recaptcha btn-custom px-4 py-2"
                        data-sitekey="6Lfx478rAAAAABIGgk6KItdz-8WyVACYAA8pXx1Y" data-callback='onSubmit'
                        data-action='submit'>Submit
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>