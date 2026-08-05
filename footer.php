    </div> <!-- End smooth-content -->
    </div> <!-- End smooth-wrapper -->

    <!-- Footer Section Start -->
    <footer class="footer-area bg-dark text-white pt-5 pb-3">
        <div class="container">
            <div class="row g-4 mb-5">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget">
                        <a href="index" class="footer-logo mb-3 d-inline-block text-decoration-none">
                            <img src="assets/img/logo/wordmark_dark.jpg" alt="Baig Solution" style="height: 48px; border-radius: 8px; mix-blend-mode: lighten;">
                        </a>
                        <p class="text-muted">
                            At Baig Solution, we operate at the intersection of AI agents, sophisticated workflow automation, and custom web development. Let us help automate your growth.
                        </p>
                        <div class="social-links mt-4">
                            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="footer-widget">
                        <h5 class="widget-title">Quick Links</h5>
                        <ul class="list-unstyled footer-menu">
                            <li><a href="index">Home</a></li>
                            <li><a href="about">About Us</a></li>
                            <li><a href="service">Our Services</a></li>
                            <li><a href="contact">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h5 class="widget-title">Our Services</h5>
                        <ul class="list-unstyled footer-menu">
                            <li><a href="ai-agents">AI Agents Integration</a></li>
                            <li><a href="ai-automations">AI Automations (n8n/Make)</a></li>
                            <li><a href="website-development">Web & App Development</a></li>
                            <li><a href="product-shoot">Product Shoot</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h5 class="widget-title">Contact Info</h5>
                        <ul class="list-unstyled contact-info text-muted">

                            <li class="d-flex mb-2">
                                <i class="fa-solid fa-envelope text-accent-brand me-2 mt-1"></i>
                                <a href="mailto:bobrober2323@gmail.com">bobrober2323@gmail.com</a>
                            </li>
                            <li class="d-flex mb-2">
                                <i class="fa-solid fa-phone text-accent-brand me-2 mt-1"></i>
                                <a href="tel:+923366920141">+92 336 6920141</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <hr class="border-secondary">
            
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0 text-muted">&copy; 2026 Baig Solution. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end mt-2 mt-md-0">
                    <a href="privacy" class="text-muted text-decoration-none me-3">Privacy Policy</a>
                    <a href="terms" class="text-muted text-decoration-none">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Newsletter Discount Popup Modal (Light Theme like SoftNest Technologies) -->
    <div id="newsletterModal" class="newsletter-modal">
        <div class="newsletter-modal-content">
            <button class="close-modal" id="closeModal">&times;</button>
            <div class="modal-content-side" style="padding: 40px 30px; text-align: center;">
                <div class="modal-logo">
                    <img src="assets/img/logo/icon_light.jpg" alt="Baig Solution Logo" style="width: 48px; height: 48px; object-fit: cover; border-radius: 12px; mix-blend-mode: darken; border: 1px solid rgba(0,0,0,0.1); display: block; margin: 0 auto;">
                </div>
                <h2 style="font-size: 28px; margin-bottom: 10px; color: #1a1a1a;">Exclusive 10% Discount!</h2>
                <p style="font-size: 15px; color: #666; margin-bottom: 25px;">Subscribe to our newsletter and save <b>10%</b> on your first project with us.</p>
                <form id="popup-newsletter-form" class="modal-form" novalidate style="max-width: 500px; margin: 0 auto;">
                    <div class="input-group-custom" style="display: flex; flex-direction: column; align-items: center;">
                        <input type="email" id="popup-email-input" name="email" placeholder="Your email address" required 
                            style="width: 100%; padding: 15px 20px; border: 1px solid #ddd; border-radius: 12px; transition: all 0.3s ease; box-shadow: 0 2px 5px rgba(0,0,0,0.05); font-size: 16px; color: #333; background: #fff;">
                        
                        <div class="error-msg-container" style="height: 18px; width: 100%; display: flex; align-items: center; justify-content: center;">
                            <span id="popup-email-error" style="color: #ff3333; font-size: 13px; display: none;">Please enter a valid email address.</span>
                        </div>

                        <button type="submit" class="btn btn-brand w-100 py-3"><span>Claim Now</span> <span class="arrow-btn"><i class="fa-solid fa-arrow-up-right"></i></span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JS Scripts -->
    <!-- jQuery 3.7.1 -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    
    <!-- Bootstrap 5 Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- GSAP for scroll animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    
    <!-- Three.js (for premium particles) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    
    <!-- Matter.js (for physics box) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/matter-js/0.19.0/matter.min.js"></script>

    <!-- Firebase SDK (Modular v10.7.1) -->
    <script type="module">
        import { initializeApp } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-app.js";
        import { getFirestore, collection, addDoc, onSnapshot, serverTimestamp, query, orderBy, where } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-firestore.js";

        // Firebase config setup
        const firebaseConfig = {
            apiKey: "AIzaSyC6xWt2A5L2zAIH99ZKg-wLarxMrq-wXkQ",
            authDomain: "agile-seeker-474518-k5.firebaseapp.com",
            projectId: "agile-seeker-474518-k5",
            storageBucket: "agile-seeker-474518-k5.firebasestorage.app",
            messagingSenderId: "622205381755",
            appId: "1:622205381755:web:28e759fca2b0d40249c6de",
            measurementId: "G-BJPTX3MKXB"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const db = getFirestore(app);

        // Make db globally available
        window.db = db;
        console.log("Firebase initialized successfully!");

        // --- REAL-TIME TESTIMONIALS (rating >= 4) → auto-populate TESTIMONIALS section ---
        function escapeHTMLInner(str) {
            if (!str) return '';
            return String(str).replace(/[&<>'\"]/g, tag => ({'&':'&amp;','<':'&lt;','>':'&gt;',"'":'&#39;','"':'&quot;'}[tag] || tag));
        }

        const testimonialsContainer = document.getElementById('testimonialsList');
        if (testimonialsContainer) {
            const tQuery = query(
                collection(db, 'reviews'),
                where('rating', '>=', 4),
                orderBy('createdAt', 'desc')
            );
            onSnapshot(tQuery, (snapshot) => {
                if (snapshot.empty) {
                    testimonialsContainer.innerHTML = `<div class="col-12 text-center text-muted py-5"><i class="fa-regular fa-face-smile fa-2x mb-3 d-block"></i>Be the first to leave a positive review!</div>`;
                    return;
                }
                testimonialsContainer.innerHTML = '';
                snapshot.forEach((doc) => {
                    const d = doc.data();
                    let starsHtml = '';
                    for (let i = 1; i <= 5; i++) {
                        starsHtml += i <= d.rating
                            ? '<i class="fa-solid fa-star text-accent-brand me-1"></i>'
                            : '<i class="fa-regular fa-star text-accent-brand me-1"></i>';
                    }
                    const profileLink = d.profileLink ? `<a href="${escapeHTMLInner(d.profileLink)}" target="_blank" rel="noopener" class="small text-accent-brand text-decoration-none mt-1 d-inline-block"><i class="fa-solid fa-arrow-up-right-from-square me-1"></i>View Profile</a>` : '';
                    const col = document.createElement('div');
                    col.className = 'col-md-6 col-lg-4';
                    col.innerHTML = `
                        <div class="review-card p-4 border rounded-4 bg-white shadow-sm h-100">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <div>
                                    <h5 class="fw-bold text-dark mb-0">${escapeHTMLInner(d.name)}</h5>
                                    <div class="review-stars-display mt-1">${starsHtml}</div>
                                    ${profileLink}
                                </div>
                                <small class="text-muted">${d.rating} ★</small>
                            </div>
                            <p class="text-secondary mb-0 mt-2" style="white-space:pre-line;">${escapeHTMLInner(d.comment)}</p>
                        </div>`;
                    testimonialsContainer.appendChild(col);
                });
            });
        }

        // --- NEW REVIEW FORM (index.php: id="review-firebase-form") ---
        const newReviewForm = document.getElementById('review-firebase-form');
        if (newReviewForm) {
            newReviewForm.addEventListener('submit', async (e) => {
                e.preventDefault();
                const name    = (document.getElementById('review-name')?.value || '').trim();
                const email   = (document.getElementById('review-email')?.value || '').trim();
                const phone   = (document.getElementById('review-phone')?.value || '').trim();
                const link    = (document.getElementById('review-link')?.value || '').trim();
                const rating  = parseInt(document.getElementById('review-rating')?.value || '0');
                const comment = (document.getElementById('review-comment')?.value || '').trim();

                if (!name || !email || !rating || !comment) {
                    Swal.fire({ title: 'Required Fields', text: 'Please fill in Name, Email, Rating and Review.', icon: 'warning', confirmButtonColor: '#e77f23', background: '#ffffff', color: '#1a1a1a' });
                    return;
                }

                const submitBtn = newReviewForm.querySelector("button[type='submit']");
                const textSpan  = submitBtn?.querySelector('span:not(.arrow-btn)');
                const origText  = textSpan ? textSpan.innerHTML : (submitBtn?.innerHTML || '');
                if (textSpan) textSpan.innerHTML = '<i class="fa-solid fa-spinner fa-spin me-2"></i>Submitting...';
                else if (submitBtn) submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin me-2"></i>Submitting...';
                if (submitBtn) submitBtn.disabled = true;

                try {
                    await Promise.race([
                        addDoc(collection(db, 'reviews'), {
                            name, email,
                            phone: phone || null,
                            profileLink: link || null,
                            rating,
                            comment,
                            createdAt: serverTimestamp()
                        }),
                        new Promise((_, rej) => setTimeout(() => rej(new Error('Timeout')), 4000))
                    ]);
                    Swal.fire({ title: 'Thank you!', text: 'Your review has been submitted successfully.', icon: 'success', confirmButtonColor: '#e77f23', background: '#ffffff', color: '#1a1a1a' });
                    newReviewForm.reset();
                } catch (err) {
                    if (err.message === 'Timeout') {
                        Swal.fire({ title: 'Thank you!', text: 'Your review has been submitted.', icon: 'success', confirmButtonColor: '#e77f23', background: '#ffffff', color: '#1a1a1a' });
                        newReviewForm.reset();
                    } else {
                        Swal.fire({ title: 'Error', text: err.message, icon: 'error', confirmButtonColor: '#ff4a5a' });
                    }
                } finally {
                    if (textSpan) textSpan.innerHTML = origText;
                    else if (submitBtn) submitBtn.innerHTML = origText;
                    if (submitBtn) submitBtn.disabled = false;
                }
            });
        }

        // --- CUSTOMER RATINGS & REVIEWS REAL-TIME INTEGRATION ---
        const reviewsList = document.getElementById("reviewsList");
        if (reviewsList) {
            const averageRatingText = document.getElementById("averageRating");
            const reviewCountText = document.getElementById("reviewCount");

            // Real-Time Listening for Reviews
            const reviewsQuery = query(collection(db, "reviews"), orderBy("createdAt", "desc"));
            onSnapshot(reviewsQuery, (snapshot) => {
                reviewsList.innerHTML = "";
                let totalRating = 0;
                let reviewCount = 0;

                snapshot.forEach((doc) => {
                    const review = doc.data();
                    reviewCount++;
                    totalRating += parseInt(review.rating);

                    // Formatted Date
                    let dateStr = "Just now";
                    if (review.createdAt) {
                        const date = review.createdAt.toDate();
                        dateStr = date.toLocaleDateString(undefined, {
                            year: 'numeric',
                            month: 'short',
                            day: 'numeric',
                            hour: '2-digit',
                            minute: '2-digit'
                        });
                    }

                    // Build star rating display
                    let starsHtml = "";
                    for (let i = 1; i <= 5; i++) {
                        if (i <= review.rating) {
                            starsHtml += '<i class="fa-solid fa-star text-accent-brand me-1"></i>';
                        } else {
                            starsHtml += '<i class="fa-regular fa-star text-accent-brand me-1"></i>';
                        }
                    }

                    const profileLink = review.profileLink ? `<a href="${escapeHTML(review.profileLink)}" target="_blank" rel="noopener" class="small text-accent-brand text-decoration-none mt-1 d-inline-block"><i class="fa-solid fa-arrow-up-right-from-square me-1"></i>View Profile</a>` : '';

                    const reviewCard = document.createElement("div");
                    reviewCard.className = "col-md-6 col-lg-4";
                    reviewCard.innerHTML = `
                        <div class="review-card p-4 border rounded-4 bg-white shadow-sm h-100">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <div>
                                    <h5 class="fw-bold text-dark mb-0">${escapeHTML(review.name)}</h5>
                                    <div class="review-stars-display mt-1">${starsHtml}</div>
                                    ${profileLink}
                                </div>
                                <small class="text-muted">${dateStr}</small>
                            </div>
                            <p class="text-secondary mb-0 mt-2 text-start" style="white-space: pre-line;">${escapeHTML(review.comment)}</p>
                        </div>
                    `;
                    reviewsList.appendChild(reviewCard);
                });

                // Update metrics
                if (reviewCount > 0) {
                    const avg = (totalRating / reviewCount).toFixed(1);
                    if(averageRatingText) averageRatingText.innerHTML = `${avg} <i class="fa-solid fa-star text-accent-brand"></i>`;
                    if(reviewCountText) reviewCountText.textContent = `based on ${reviewCount} review${reviewCount > 1 ? 's' : ''}`;
                } else {
                    if(averageRatingText) averageRatingText.textContent = "0 ★";
                    if(reviewCountText) reviewCountText.textContent = "(0 reviews)";
                    reviewsList.innerHTML = `<div class="col-12 text-center text-muted py-5 border rounded-4 bg-light">No reviews yet. Be the first to write a review!</div>`;
                }
            });

            function escapeHTML(str) {
                if (!str) return '';
                return String(str).replace(/[&<>'"]/g, 
                    tag => ({
                        '&': '&amp;',
                        '<': '&lt;',
                        '>': '&gt;',
                        "'": '&#39;',
                        '"': '&quot;'
                    }[tag] || tag)
                );
            }
        }
    </script>

    <!-- n8n Chat Widget Integration -->
    <script type="module">
        import { createChat } from 'https://cdn.jsdelivr.net/npm/@n8n/chat/dist/chat.bundle.es.js';
        createChat({
            webhookUrl: 'https://n8n.bminternational.com.pk/webhook/ae4e39aa-5247-4b22-b089-00e3cbf3216c/chat',
            showWelcomeScreen: true,
            initialMessages: [
                'Hi! I am the Baig Solution Assistant. How can I help you today?'
            ],
            i18n: {
                en: {
                    title: 'Baig Solution Support',
                    subtitle: 'Powered by n8n',
                    getStarted: 'Start Chatting',
                }
            }
        });
    </script>



    <!-- Custom Main JS -->
    <script src="assets/js/main.js?v=1.0.2"></script>
</body>
</html>
