<?php $page_key = 'contact'; include 'header.php'; ?>
<!-- SEO Override for Reviews page -->
<script>
    document.title = 'Customer Ratings & Reviews | Automatixes';
    document.querySelector('meta[name="description"]')?.setAttribute('content', 'Read real client reviews and ratings for Automatixes. Share your experience with our AI automation, web development, and product photography services.');
    document.querySelector('link[rel="canonical"]')?.setAttribute('href', 'https://automatixes.com/Reviews');
</script>

<!-- Reviews Hero -->
<section class="subpage-hero text-center text-dark">
    <div class="container">
        <span class="badge bg-brand-translucent text-accent-brand mb-3 font-monospace px-3 py-2 border border-brand-50">CUSTOMER REVIEWS</span>
        <h1 class="display-4 fw-extrabold text-dark">Ratings &amp; Reviews</h1>
        <div class="title-underline"></div>
        <p class="lead text-secondary mx-auto mt-4 max-w-700">
            Share your experience with Automatixes. Your feedback helps us grow.
        </p>
    </div>
</section>

<!-- Review Form Section -->
<section class="section-padding bg-white text-dark">
    <div class="container">
        <div class="row g-5 justify-content-center">
            <div class="col-lg-8">
                <div class="contact-form-wrapper p-4 p-md-5 rounded-4 shadow-sm bg-light">
                    <h3 class="mb-2 fw-extrabold text-dark text-center">Leave a Review</h3>
                    <p class="text-center text-muted mb-4">Share your experience and link to your business profile.</p>

                    <form id="review-firebase-form" novalidate>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label for="review-name" class="form-label text-muted fw-bold">Full Name</label>
                                <input type="text" class="form-control border-light-subtle bg-white text-dark" id="review-name" placeholder="John Doe" required>
                            </div>
                            <div class="col-md-6">
                                <label for="review-email" class="form-label text-muted fw-bold">Email Address</label>
                                <input type="email" class="form-control border-light-subtle bg-white text-dark" id="review-email" placeholder="john@example.com" required>
                            </div>
                            <div class="col-md-6">
                                <label for="review-phone" class="form-label text-muted fw-bold">Phone</label>
                                <input type="tel" class="form-control border-light-subtle bg-white text-dark" id="review-phone" placeholder="+92 300 1234567">
                            </div>
                            <div class="col-md-6">
                                <label for="review-link" class="form-label text-muted fw-bold">Business / Freelancer Link</label>
                                <input type="url" class="form-control border-light-subtle bg-white text-dark" id="review-link" placeholder="https://yourprofile.com">
                            </div>
                            <div class="col-md-6">
                                <label for="review-rating" class="form-label text-muted fw-bold">Rating (1Ã¢â‚¬â€˜5)</label>
                                <select class="form-select border-light-subtle bg-white text-dark" id="review-rating" required>
                                    <option value="" disabled selected>Select Rating</option>
                                    <option value="1">1 Ã¢Ëœâ€¦</option>
                                    <option value="2">2 Ã¢Ëœâ€¦Ã¢Ëœâ€¦</option>
                                    <option value="3">3 Ã¢Ëœâ€¦Ã¢Ëœâ€¦Ã¢Ëœâ€¦</option>
                                    <option value="4">4 Ã¢Ëœâ€¦Ã¢Ëœâ€¦Ã¢Ëœâ€¦Ã¢Ëœâ€¦</option>
                                    <option value="5">5 Ã¢Ëœâ€¦Ã¢Ëœâ€¦Ã¢Ëœâ€¦Ã¢Ëœâ€¦Ã¢Ëœâ€¦</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="review-comment" class="form-label text-muted fw-bold">Your Review</label>
                                <textarea class="form-control border-light-subtle bg-white text-dark" id="review-comment" rows="4" placeholder="What did you love about our service?" required></textarea>
                            </div>
                            <div class="col-12 mt-2">
                                <button type="submit" class="btn btn-brand w-100 py-3">
                                    <span>Submit Review</span>
                                    <span class="arrow-btn"><i class="fa-solid fa-arrow-up-right"></i></span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Social Share Section -->
<section class="py-4 bg-white text-dark border-bottom">
    <div class="container text-center">
        <h5 class="fw-bold mb-3">Share this page</h5>
        <div class="d-flex justify-content-center gap-3">
            <a href="https://wa.me/?text=https://automatixes.com/Reviews" target="_blank" class="btn btn-outline-brand rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px; color: #E6FF2B; border-color: #E6FF2B; transition: all 0.3s;" onmouseover="this.style.backgroundColor='#E6FF2B'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='transparent'; this.style.color='#E6FF2B';">
                <i class="fa-brands fa-whatsapp fa-lg"></i>
            </a>
            <a href="https://twitter.com/intent/tweet?url=https://automatixes.com/Reviews" target="_blank" class="btn btn-outline-brand rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px; color: #E6FF2B; border-color: #E6FF2B; transition: all 0.3s;" onmouseover="this.style.backgroundColor='#E6FF2B'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='transparent'; this.style.color='#E6FF2B';">
                <i class="fa-brands fa-x-twitter fa-lg"></i>
            </a>
            <button onclick="copyReviewLink()" class="btn btn-outline-brand rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px; color: #E6FF2B; border-color: #E6FF2B; transition: all 0.3s;" onmouseover="this.style.backgroundColor='#E6FF2B'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='transparent'; this.style.color='#E6FF2B';">
                <i class="fa-solid fa-link fa-lg"></i>
            </button>
        </div>
    </div>
</section>
<script>
function copyReviewLink() {
    navigator.clipboard.writeText('https://automatixes.com/Reviews').then(() => {
        if(typeof Swal !== 'undefined'){
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'success',
                title: 'Link copied to clipboard!',
                showConfirmButton: false,
                timer: 2000,
                background: '#ffffff',
                color: '#1a1a1a',
                iconColor: '#E6FF2B'
            });
        } else {
            alert("Link copied to clipboard!");
        }
    });
}
</script>
<!-- Live Reviews List Section -->
<section class="section-padding bg-light text-dark">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-extrabold text-dark">What Our Clients Say</h2>
            <p class="text-muted">
                Average: <strong id="averageRating">0 Ã¢Ëœâ€¦</strong>
                &nbsp;<span id="reviewCount" class="text-muted small">(0 reviews)</span>
            </p>
        </div>
        <div id="reviewsList" class="row g-4">
            <!-- All reviews injected here by Firebase real-time listener -->
        </div>
        <!-- Positive reviews (rating >= 4) also populate this for testimonials -->
        <div id="testimonialsList" class="d-none"></div>
    </div>
</section>

<?php include 'footer.php'; ?>


