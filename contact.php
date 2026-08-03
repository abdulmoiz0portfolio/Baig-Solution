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
                                <button type="submit" class="btn btn-brand w-100 py-3"><span>Send Message</span> <span class="arrow-btn"><i class="fa-solid fa-arrow-up-right"></i></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Reviews Section -->
<section id="reviews" class="section-padding bg-white text-dark">
    <div class="container">
        <h3 class="mb-4 fw-extrabold text-dark text-center">Customer Ratings & Reviews</h3>
        <div class="average-rating mb-3 text-center">
            <span id="averageRating">0 ★</span> <span id="reviewCount">(0 reviews)</span>
        </div>
        <form id="reviewForm" class="mb-4" novalidate>
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label text-muted fw-bold">Full Name</label>
                    <input type="text" class="form-control" id="reviewName" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label text-muted fw-bold">Rating</label>
                    <div id="starRating" class="star-rating mb-2">
                        <i class="fa-regular fa-star star" data-value="1"></i>
                        <i class="fa-regular fa-star star" data-value="2"></i>
                        <i class="fa-regular fa-star star" data-value="3"></i>
                        <i class="fa-regular fa-star star" data-value="4"></i>
                        <i class="fa-regular fa-star star" data-value="5"></i>
                    </div>
                    <input type="hidden" id="reviewRating" required>
                </div>
                <div class="col-12">
                    <label class="form-label text-muted fw-bold">Comment</label>
                    <textarea class="form-control" id="reviewComment" rows="3" required></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-brand w-100 py-3"><span>Submit Review</span> <span class="arrow-btn"><i class="fa-solid fa-arrow-up-right"></i></span></button>
                </div>
            </div>
        </form>
        <div id="reviewsList" class="reviews-list"></div>
    </div>
</section>

<?php include 'footer.php'; ?>


