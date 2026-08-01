<?php $page_key = 'contact'; include 'header.php'; ?>

<!-- Contact Hero Section -->
<section class="subpage-hero text-center text-dark">
    <div class="container">
        <span class="badge bg-brand-translucent text-accent-brand mb-3 font-monospace px-3 py-2 border border-brand-50">GET IN TOUCH</span>
        <h1 class="display-4 fw-extrabold text-dark">Contact Baig Solution</h1>
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
                            <div class="col-12">
                                <label for="contact-service-page" class="form-label text-muted fw-bold">Service Required</label>
                                <select class="form-select border-light-subtle bg-white text-dark" id="contact-service-page" required>
                                    <option value="" disabled selected>Select a Service</option>
                                    <option value="AI Agents">AI Agents Integration</option>
                                    <option value="AI Automations">AI Automations (n8n/Make)</option>
                                    <option value="Web Development">Web & App Development</option>
                                    <option value="UI/UX Design">UI/UX Design</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="contact-message-page" class="form-label text-muted fw-bold">Project Description</label>
                                <textarea class="form-control border-light-subtle bg-white text-dark" id="contact-message-page" rows="5" placeholder="Tell us about your requirements..." required></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-brand w-100 py-3 fw-bold">Send Message <i class="fa-solid fa-paper-plane ms-2"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
