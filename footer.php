    </div> <!-- End smooth-content -->
    </div> <!-- End smooth-wrapper -->

    <!-- Footer Section Start -->
    <footer class="footer-area bg-dark text-white pt-5 pb-3">
        <div class="container">
            <div class="row g-4 mb-5">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget">
                        <a href="index" class="footer-logo mb-3 d-inline-block text-decoration-none">
                            <span class="logo-icon"><i class="fa-solid fa-brain-circuit text-accent-brand me-2"></i></span>
                            <span class="logo-text text-white">BAIG <span class="text-accent-brand">SOLUTION</span></span>
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
                                <a href="mailto:info@baigsolution.com">info@baigsolution.com</a>
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
                    <a href="#" class="text-muted text-decoration-none me-3">Privacy Policy</a>
                    <a href="#" class="text-muted text-decoration-none">Terms of Service</a>
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
                    <span class="logo-icon"><i class="fa-solid fa-brain-circuit text-accent-brand me-2"></i></span>
                    <span class="logo-text text-dark">BAIG <span class="text-accent-brand">SOLUTION</span></span>
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
        import { getFirestore, collection, addDoc, onSnapshot, serverTimestamp, query, orderBy } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-firestore.js";

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

        // --- CUSTOMER RATINGS & REVIEWS REAL-TIME INTEGRATION ---
        const reviewForm = document.getElementById("reviewForm");
        if (reviewForm) {
            const starRating = document.getElementById("starRating");
            const stars = starRating.querySelectorAll(".star");
            const ratingInput = document.getElementById("reviewRating");
            const reviewsList = document.getElementById("reviewsList");
            const averageRatingText = document.getElementById("averageRating");
            const reviewCountText = document.getElementById("reviewCount");

            // Interactive Star UI
            let selectedRating = 0;
            stars.forEach(star => {
                star.addEventListener("mouseover", () => {
                    const value = parseInt(star.getAttribute("data-value"));
                    highlightStars(value);
                });

                star.addEventListener("mouseout", () => {
                    highlightStars(selectedRating);
                });

                star.addEventListener("click", () => {
                    selectedRating = parseInt(star.getAttribute("data-value"));
                    ratingInput.value = selectedRating;
                    highlightStars(selectedRating);
                });
            });

            function highlightStars(count) {
                stars.forEach((star, index) => {
                    if (index < count) {
                        star.classList.remove("fa-regular");
                        star.classList.add("fa-solid", "active");
                    } else {
                        star.classList.remove("fa-solid", "active");
                        star.classList.add("fa-regular");
                    }
                });
            }

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

                    const reviewCard = document.createElement("div");
                    reviewCard.className = "review-card p-4 mb-3 border rounded-4 bg-light shadow-sm";
                    reviewCard.innerHTML = `
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <div>
                                <h5 class="fw-bold text-dark mb-0">${escapeHTML(review.name)}</h5>
                                <div class="review-stars-display mt-1">${starsHtml}</div>
                            </div>
                            <small class="text-muted">${dateStr}</small>
                        </div>
                        <p class="text-secondary mb-0 mt-2 text-start" style="white-space: pre-line;">${escapeHTML(review.comment)}</p>
                    `;
                    reviewsList.appendChild(reviewCard);
                });

                // Update metrics
                if (reviewCount > 0) {
                    const avg = (totalRating / reviewCount).toFixed(1);
                    averageRatingText.innerHTML = `${avg} <i class="fa-solid fa-star text-accent-brand"></i>`;
                    reviewCountText.textContent = `based on ${reviewCount} review${reviewCount > 1 ? 's' : ''}`;
                } else {
                    averageRatingText.textContent = "0 ★";
                    reviewCountText.textContent = "(0 reviews)";
                    reviewsList.innerHTML = `<div class="text-center text-muted py-5 border rounded-4 bg-light">No reviews yet. Be the first to write a review!</div>`;
                }
            });

            function escapeHTML(str) {
                return str.replace(/[&<>'"]/g, 
                    tag => ({
                        '&': '&amp;',
                        '<': '&lt;',
                        '>': '&gt;',
                        "'": '&#39;',
                        '"': '&quot;'
                    }[tag] || tag)
                );
            }

            // Submit Review Form
            reviewForm.addEventListener("submit", async (e) => {
                e.preventDefault();

                const name = document.getElementById("reviewName").value.trim();
                const rating = ratingInput.value;
                const comment = document.getElementById("reviewComment").value.trim();

                if (!name || !rating || !comment) {
                    Swal.fire({
                        title: 'Required Fields',
                        text: 'Please enter your name, select a star rating, and write a comment.',
                        icon: 'warning',
                        confirmButtonColor: '#e77f23',
                        background: '#ffffff',
                        color: '#1a1a1a'
                    });
                    return;
                }

                const submitBtn = reviewForm.querySelector("button[type='submit']");
                const textSpan = submitBtn.querySelector("span:not(.arrow-btn)");
                const originalText = textSpan ? textSpan.innerHTML : submitBtn.innerHTML;
                
                if (textSpan) {
                    textSpan.innerHTML = '<i class="fa-solid fa-spinner fa-spin me-2"></i> Submitting...';
                } else {
                    submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin me-2"></i> Submitting...';
                }
                submitBtn.disabled = true;

                try {
                    const reviewPromise = addDoc(collection(db, "reviews"), {
                        name,
                        rating: parseInt(rating),
                        comment,
                        createdAt: serverTimestamp()
                    });

                    await Promise.race([
                        reviewPromise,
                        new Promise((_, reject) => setTimeout(() => reject(new Error("Timeout")), 3500))
                    ]);

                    Swal.fire({
                        title: 'Thank you!',
                        text: 'Your review has been posted successfully.',
                        icon: 'success',
                        confirmButtonColor: '#e77f23',
                        background: '#ffffff',
                        color: '#1a1a1a'
                    });

                    reviewForm.reset();
                    selectedRating = 0;
                    ratingInput.value = "";
                    highlightStars(0);
                } catch (err) {
                    if (err.message === "Timeout") {
                        console.warn("Firestore review write timed out on server, but queued locally.");
                        Swal.fire({
                            title: 'Thank you!',
                            text: 'Your review has been posted successfully.',
                            icon: 'success',
                            confirmButtonColor: '#e77f23',
                            background: '#ffffff',
                            color: '#1a1a1a'
                        });
                        reviewForm.reset();
                        selectedRating = 0;
                        ratingInput.value = "";
                        highlightStars(0);
                    } else {
                        console.error("Error writing review:", err);
                        Swal.fire({
                            title: 'Submission Failed',
                            text: err.message,
                            icon: 'error',
                            confirmButtonColor: '#ff4a5a',
                            background: '#ffffff',
                            color: '#1a1a1a'
                        });
                    }
                } finally {
                    if (textSpan) {
                        textSpan.innerHTML = originalText;
                    } else {
                        submitBtn.innerHTML = originalText;
                    }
                    submitBtn.disabled = false;
                }
            });
        }
    </script>

    <!-- n8n Chat Widget Integration -->
    <script type="module">
        import { createChat } from 'https://cdn.jsdelivr.net/npm/@n8n/chat/dist/chat.bundle.es.js';
        createChat({
            webhookUrl: 'https://belllaroger691.app.n8n.cloud/webhook/ae4e39aa-5247-4b22-b089-00e3cbf3216c/chat'
        });
    </script>



    <!-- Custom Main JS -->
    <script src="assets/js/main.js?v=1.0.2"></script>
</body>
</html>
