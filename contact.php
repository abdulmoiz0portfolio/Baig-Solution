<?php $page_key = 'contact'; include 'header.php'; ?>

<!-- Contact Hero Section -->
<section class="subpage-hero text-center text-dark">
    <div class="container">
        <span class="badge bg-brand-translucent text-accent-brand mb-3 font-monospace px-3 py-2 border border-brand-50">GET IN TOUCH</span>
        <h1 class="display-4 fw-extrabold text-dark">Contact Automatixes</h1>
        <div class="title-underline"></div>
        <p class="lead text-secondary mx-auto mt-4 max-w-700">
            Have questions about AI integrations or need a web build? Send us a message below.
        </p>
    </div>
</section>

<!-- Detailed Contact Form Section -->
<section class="section-padding bg-white text-dark">
    <div class="container">
        <div class="row g-5 justify-content-center">
            <div class="col-lg-8">
                <div class="contact-form-wrapper p-4 p-md-5 rounded-4 shadow-sm bg-light">
                    <h3 class="mb-4 fw-extrabold text-dark text-center">Project Proposal Form</h3>

                    <form id="contact-firebase-form-page" novalidate>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label for="contact-name-page" class="form-label text-muted fw-bold">Full Name</label>
                                <input type="text" class="form-control border-light-subtle bg-white text-dark" id="contact-name-page" placeholder="John Doe" required>
                            </div>
                            <div class="col-md-6">
                                <label for="contact-email-page" class="form-label text-muted fw-bold">Email Address</label>
                                <input type="email" class="form-control border-light-subtle bg-white text-dark" id="contact-email-page" placeholder="john@example.com" required>
                            </div>
                            <div class="col-md-6">
                                <label for="contact-phone-page" class="form-label text-muted fw-bold">Phone</label>
                                <input type="tel" class="form-control border-light-subtle bg-white text-dark" id="contact-phone-page" placeholder="+92 300 1234567">
                            </div>
                            <div class="col-md-6">
                                <label for="contact-biz-link-page" class="form-label text-muted fw-bold">Business / Freelancer Link</label>
                                <input type="url" class="form-control border-light-subtle bg-white text-dark" id="contact-biz-link-page" placeholder="https://yourprofile.com">
                            </div>
                            <div class="col-12">
                                <label for="contact-service-page" class="form-label text-muted fw-bold">Service Required</label>
                                <select class="form-select border-light-subtle bg-white text-dark" id="contact-service-page" required>
                                    <option value="" disabled selected>Select a Service</option>
                                    <option value="AI Agents">AI Agents Integration</option>
                                    <option value="AI Automations">AI Automations (n8n/Make)</option>
                                    <option value="Web Development">Web &amp; App Development</option>
                                    <option value="UI/UX Design">UI/UX Design</option>
                                    <option value="Support">Support</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="contact-message-page" class="form-label text-muted fw-bold">Project Description</label>
                                <textarea class="form-control border-light-subtle bg-white text-dark" id="contact-message-page" rows="5" placeholder="Tell us about your requirements..." required></textarea>
                            </div>
                            <div class="col-12 mt-2">
                                <button type="submit" class="btn btn-brand w-100 py-3"><span>Send Message</span> <span class="arrow-btn"><i class="fa-solid fa-arrow-up-right"></i></span></button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Share Reviews Page CTA -->
                <div class="text-center mt-5 p-4 rounded-4 border bg-light">
                    <p class="text-muted mb-2 fw-semibold"><i class="fa-solid fa-star text-accent-brand me-2"></i>Happy with our service?</p>
                    <h5 class="fw-extrabold text-dark mb-3">Leave a Review &amp; Help Others Decide</h5>
                    <a href="reviews" class="btn btn-brand px-4 py-2">
                        <span>Write a Review</span>
                        <span class="arrow-btn"><i class="fa-solid fa-arrow-up-right"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

