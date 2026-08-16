    </div> <!-- End smooth-content -->
    </div> <!-- End smooth-wrapper -->

    <?php if ($page_key === 'index' || $page_key === 'voice-agent'): ?>
    <!-- ElevenLabs Voice Widget -->
    <elevenlabs-convai agent-id="agent_1601m004ny6efkns714nfr8vjvqm"></elevenlabs-convai>
    <script src="https://unpkg.com/@elevenlabs/convai-widget-embed" async type="text/javascript"></script>
    <?php endif; ?>

    <!-- Footer Section Start -->
    <footer class="footer-area bg-dark text-white pt-5 pb-3">
        <div class="container">
            <div class="row g-4 mb-5">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget">
                        <a href="index" class="footer-logo mb-3 d-inline-block text-decoration-none">
                            <img src="assets/img/logo/automatixes-logo.svg" alt="Automatixes" style="height: 48px; border-radius: 8px; mix-blend-mode: lighten;">
                        </a>
                        <p class="text-muted">
                            At Automatixes, we operate at the intersection of AI agents, sophisticated workflow automation, and custom web development. Let us help automate your growth.
                        </p>
                        <div class="social-links mt-4 d-none">
                            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        </div>
                        <div class="mt-3">
                            <button id="theme-toggle" class="btn btn-outline-light btn-sm rounded-pill px-3">
                                <i class="fas fa-sun me-1"></i> Switch Theme
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="footer-widget">
                        <h5 class="widget-title">Quick Links</h5>
                        <ul class="list-unstyled footer-menu">
                            <li><a href="index">Home</a></li>
                            <li><a href="about">About Us</a></li>
                            <li><a href="ai-agents">AI Agents</a></li>
                            <li><a href="ai-automations">AI Automations</a></li>
                            <li><a href="website-development">Web Development</a></li>
                            <li><a href="blogs">Blogs</a></li>
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
                            <li><a href="invoice-maker">Free Invoice Maker</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h5 class="widget-title">Contact Info</h5>
                        <ul class="list-unstyled contact-info text-muted">

                            <li class="d-flex mb-2">
                                <i class="fa-solid fa-envelope text-accent-brand me-2 mt-1"></i>
                                <a href="mailto:contact@automatixes.com">contact@automatixes.com</a>
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
                    <p class="mb-0 text-muted">&copy; 2026 Automatixes. All rights reserved.</p>
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
                    <img src="assets/img/logo/automatixes-logo.svg" alt="Automatixes Logo" style="width: 48px; height: 48px; object-fit: cover; border-radius: 12px; mix-blend-mode: darken; border: 1px solid rgba(0,0,0,0.1); display: block; margin: 0 auto;">
                </div>
                <h2 style="font-size: 28px; margin-bottom: 10px; ">Exclusive 10% Discount!</h2>
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
                    Swal.fire({ title: 'Required Fields', text: 'Please fill in Name, Email, Rating and Review.', icon: 'warning', confirmButtonColor: '#3B82F6', background: '#ffffff', color: '#1a1a1a' });
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
                    Swal.fire({ title: 'Thank you!', text: 'Your review has been submitted successfully.', icon: 'success', confirmButtonColor: '#3B82F6', background: '#ffffff', color: '#1a1a1a' });
                    newReviewForm.reset();
                } catch (err) {
                    if (err.message === 'Timeout') {
                        Swal.fire({ title: 'Thank you!', text: 'Your review has been submitted.', icon: 'success', confirmButtonColor: '#3B82F6', background: '#ffffff', color: '#1a1a1a' });
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

    <!-- Single Sticky Lead Capture Button -->
    <button id="sticky-expert-btn" onclick="connectWithExpert()" style="position: fixed; top: 50%; right: 0; transform: translate(calc(100% - 60px), -50%); background: #3B82F6; color: white; border: none; padding: 12px 20px 12px 20px; border-radius: 30px 0 0 30px; font-size: 15px; cursor: pointer; box-shadow: -4px 4px 15px rgba(0,0,0,0.2); font-weight: 600; z-index: 9000; transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), background 0.3s ease, box-shadow 0.3s ease; display: flex; align-items: center; gap: 8px;">
        <i class="fa-solid fa-headset fs-5"></i> <span style="white-space: nowrap;">Connect with an Expert</span>
    </button>

    <!-- n8n Chat Widget Integration -->
    <script type="module">
        import { createChat } from 'https://cdn.jsdelivr.net/npm/@n8n/chat/dist/chat.bundle.es.js';
        
        // Add custom styling for the chat widget to match Automatixes theme
        const style = document.createElement('style');
        style.innerHTML = `
            :root {
                --chat--color-primary: #1a1a1a;
                --chat--color-secondary: #3B82F6;
                --chat--color-background: #ffffff;
                --chat--color-font: #333333;
                --chat--font-family: 'Outfit', sans-serif;
            }
            .n8n-chat {
                position: fixed !important;
                bottom: 20px !important;
                right: 20px !important;
                width: 380px !important;
                height: 600px !important;
                max-width: calc(100vw - 40px) !important;
                max-height: calc(100vh - 40px) !important;
                z-index: 999999 !important;
                pointer-events: none !important; 
                display: flex !important;
                flex-direction: column !important;
                justify-content: flex-end !important;
            }
            .chat-window {
                width: 100% !important;
                max-height: 100% !important;
                pointer-events: auto !important;
            }
            .chat-layout { 
                box-shadow: 0 10px 30px rgba(0,0,0,0.15) !important; 
                border-radius: 12px !important; 
                border: none !important;
                background: #ffffff !important;
                width: 100% !important;
                height: 100% !important;
                display: flex !important;
                flex-direction: column !important;
                pointer-events: auto !important;
                overflow: hidden !important;
            }
            .chat-body {
                flex-grow: 1 !important;
                overflow-y: auto !important;
            }
            .chat-window-toggle {
                display: none !important;
            }
            @keyframes softPulse {
                0% { box-shadow: 0 0 0 0 rgba(231, 127, 35, 0.4); }
                70% { box-shadow: 0 0 0 15px rgba(231, 127, 35, 0); }
                100% { box-shadow: 0 0 0 0 rgba(231, 127, 35, 0); }
            }
            #sticky-expert-btn {
                animation: softPulse 2s infinite;
            }
            #sticky-expert-btn:hover { 
                transform: translate(0, -50%) !important; 
                background: #d67017 !important; 
                animation: none;
                box-shadow: -4px 4px 20px rgba(0,0,0,0.3) !important;
            }
            #in-chat-quick-replies::-webkit-scrollbar { display: none; }
            
            /* Fix chat header layout to make it smaller and position X button */
            .chat-header {
                padding: 15px 20px !important;
                min-height: auto !important;
                position: relative !important;
                display: block !important;
            }
            
            #custom-chat-close {
                position: absolute !important;
                top: 10px !important;
                right: 12px !important;
                background: transparent;
                border: none;
                color: #ff4757; /* Bright red color */
                font-size: 18px; /* Slightly larger for better visibility */
                font-weight: bold;
                cursor: pointer;
                line-height: 1;
                outline: none;
                padding: 5px;
                z-index: 10;
                transition: transform 0.2s, color 0.2s;
            }
            #custom-chat-close:hover {
                transform: scale(1.1);
                color: #ff6b81;
            }
        `;
        document.head.appendChild(style);

        createChat({
            webhookUrl: 'https://n8n.bminternational.com.pk/webhook/ae4e39aa-5247-4b22-b089-00e3cbf3216c/chat',
            showWelcomeScreen: true,
            initialMessages: [
                'Hi! I am Muzaini, the AI Automation Expert here. How can I help you scale today?'
            ],
            i18n: {
                en: {
                    title: 'Automatixes Support',
                    subtitle: '24/7 AI Automation Expert',
                    getStarted: 'Start Chatting',
                }
            }
        });

        const toggleChatState = () => {
            const toggleContainer = document.querySelector('.chat-window-toggle') ||
                                    document.querySelector('.chat-toggle') ||
                                    (document.querySelector('.chat-window-wrapper') ? Array.from(document.querySelector('.chat-window-wrapper').children).find(el => !el.classList.contains('chat-window') && !el.classList.contains('chat-layout')) : null) ||
                                    (document.querySelector('.chat-wrapper') ? Array.from(document.querySelector('.chat-wrapper').children).find(el => !el.classList.contains('chat-layout') && el.tagName !== 'STYLE' && el.tagName !== 'SCRIPT') : null);

            if (!toggleContainer) return;

            // Target inner interactive element if available, or toggleContainer itself
            const targetEl = toggleContainer.querySelector('button') || 
                             toggleContainer.querySelector('svg') || 
                             toggleContainer.querySelector('[role="button"]') || 
                             toggleContainer;

            // Save original inline styles
            const origContainerStyle = toggleContainer.getAttribute('style') || '';
            const origTargetStyle = (targetEl !== toggleContainer) ? (targetEl.getAttribute('style') || '') : '';

            // Temporarily unhide / restore dimensions and pointer-events so Vue 3 and browser process the click
            toggleContainer.style.cssText = 'position: fixed !important; top: 0 !important; left: 0 !important; width: 60px !important; height: 60px !important; opacity: 0.01 !important; visibility: visible !important; pointer-events: auto !important; z-index: 9999999 !important; display: block !important;';
            if (targetEl !== toggleContainer) {
                targetEl.style.cssText = 'position: relative !important; width: 100% !important; height: 100% !important; opacity: 1 !important; visibility: visible !important; pointer-events: auto !important; display: block !important;';
            }

            const eventOptions = { bubbles: true, cancelable: true, view: window, composed: true };

            try {
                targetEl.dispatchEvent(new PointerEvent('pointerdown', eventOptions));
                targetEl.dispatchEvent(new MouseEvent('mousedown', eventOptions));
                targetEl.dispatchEvent(new PointerEvent('pointerup', eventOptions));
                targetEl.dispatchEvent(new MouseEvent('mouseup', eventOptions));
                targetEl.dispatchEvent(new MouseEvent('click', eventOptions));
                if (typeof targetEl.click === 'function') {
                    targetEl.click();
                }
            } catch (e) {
                console.error("Error toggling targetEl:", e);
            }

            if (targetEl !== toggleContainer) {
                try {
                    toggleContainer.dispatchEvent(new MouseEvent('click', eventOptions));
                    if (typeof toggleContainer.click === 'function') {
                        toggleContainer.click();
                    }
                } catch (e) {}
            }

            // Restore original styles after events complete
            setTimeout(() => {
                if (toggleContainer && typeof toggleContainer.setAttribute === 'function') {
                    if (origContainerStyle) {
                        toggleContainer.setAttribute('style', origContainerStyle);
                    } else {
                        toggleContainer.removeAttribute('style');
                    }
                }
                if (targetEl && targetEl !== toggleContainer && typeof targetEl.setAttribute === 'function') {
                    if (origTargetStyle) {
                        targetEl.setAttribute('style', origTargetStyle);
                    } else {
                        targetEl.removeAttribute('style');
                    }
                }
            }, 100);
        };

        // Inject Native-looking Quick Replies and Custom Close Button
        const observer = new MutationObserver((mutations, obs) => {
            const chatLayout = document.querySelector('.chat-layout');
            
            if (chatLayout) {
                // 1. Inject Custom "X" Close Button in Header
                const chatHeader = chatLayout.querySelector('header') || chatLayout.querySelector('.chat-header') || chatLayout.firstChild;
                if (chatHeader && !document.getElementById('custom-chat-close')) {
                    const closeBtn = document.createElement('button');
                    closeBtn.id = 'custom-chat-close';
                    closeBtn.innerHTML = '✖';
                    closeBtn.onclick = (e) => {
                        if (e) {
                            e.preventDefault();
                            e.stopPropagation();
                        }
                        toggleChatState(); // Use the robust helper function to close
                        // Show the sticky button again when chat closes
                        const stickyBtn = document.getElementById('sticky-expert-btn');
                        if (stickyBtn) stickyBtn.style.display = 'flex';
                    };
                    // Only append, styling is handled in CSS above
                    chatHeader.appendChild(closeBtn);
                }

                // 2. Inject Horizontal Quick Replies above Textarea
                if (!document.getElementById('in-chat-quick-replies')) {
                    const textarea = chatLayout.querySelector('textarea');
                    if (textarea) {
                        const chatFooter = textarea.parentElement; // The container holding the input
                        
                        const qrContainer = document.createElement('div');
                        qrContainer.id = 'in-chat-quick-replies';
                        // Position relative so it naturally stacks above the input area
                        qrContainer.style.cssText = 'display: flex; gap: 8px; overflow-x: auto; padding: 10px; background: #f8f9fa; white-space: nowrap; scrollbar-width: none; border-top: 1px solid #eee; width: 100%; box-sizing: border-box;';
                        
                        const replies = [
                            { icon: '🛠️', text: 'Services' },
                            { icon: '💰', text: 'Pricing' },
                            { icon: '📞', text: 'Connect Expert' }
                        ];

                        replies.forEach(r => {
                            const btn = document.createElement('button');
                            btn.innerHTML = `${r.icon} ${r.text}`;
                            btn.style.cssText = 'background: white; border: 1px solid #ddd; padding: 6px 14px; border-radius: 4px; font-size: 13px; color: #333; cursor: pointer; flex-shrink: 0; font-family: "Outfit", sans-serif; display: flex; align-items: center; gap: 6px; box-shadow: 0 1px 2px rgba(0,0,0,0.05); transition: background 0.2s, transform 0.1s; margin-bottom: 2px; outline: none;';
                            
                            btn.onmouseover = () => btn.style.background = '#f9f9f9';
                            btn.onmouseout = () => btn.style.background = 'white';
                            btn.onmousedown = () => btn.style.transform = 'scale(0.96)';
                            btn.onmouseup = () => btn.style.transform = 'scale(1)';
                            
                            btn.onclick = () => {
                                const ta = document.querySelector('.chat-layout textarea');
                                if (ta) {
                                    const nativeInputValueSetter = Object.getOwnPropertyDescriptor(window.HTMLTextAreaElement.prototype, "value").set;
                                    
                                    let fullMsg = "";
                                    if (r.text === 'Services') fullMsg = "What services do you offer?";
                                    if (r.text === 'Pricing') fullMsg = "How much does automation cost?";
                                    if (r.text === 'Connect Expert') fullMsg = "I need to connect with an expert right now.";
                                    
                                    nativeInputValueSetter.call(ta, fullMsg);
                                    ta.dispatchEvent(new Event('input', { bubbles: true }));
                                    
                                    const enterEvent = new KeyboardEvent('keydown', {
                                        bubbles: true, cancelable: true, keyCode: 13, key: 'Enter'
                                    });
                                    ta.dispatchEvent(enterEvent);
                                }
                            };
                            qrContainer.appendChild(btn);
                        });

                        // Insert the quick replies container right before the input footer area
                        if (chatFooter && chatFooter.parentElement) {
                            chatFooter.parentElement.insertBefore(qrContainer, chatFooter);
                        }
                    }
                }
            }
        });
        observer.observe(document.body, { childList: true, subtree: true });

        // Sticky button function to open chat and send lead capture message
        window.connectWithExpert = function() {
            // Hide the sticky button when chat opens so it never overlaps!
            const stickyBtn = document.getElementById('sticky-expert-btn');
            if (stickyBtn) stickyBtn.style.display = 'none';

            // Open chat by clicking hidden toggle
            toggleChatState();

            // Send message automatically
            setTimeout(() => {
                const textarea = document.querySelector('.chat-layout textarea') || document.querySelector('textarea');
                if (textarea) {
                    const nativeInputValueSetter = Object.getOwnPropertyDescriptor(window.HTMLTextAreaElement.prototype, "value").set;
                    nativeInputValueSetter.call(textarea, "I need to connect with an expert right now.");
                    textarea.dispatchEvent(new Event('input', { bubbles: true }));
                    
                    const enterEvent = new KeyboardEvent('keydown', {
                        bubbles: true, cancelable: true, keyCode: 13, key: 'Enter'
                    });
                    textarea.dispatchEvent(enterEvent);
                }
            }, 600);
        }
    </script>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const themeToggleBtn = document.getElementById('theme-toggle');
            if (themeToggleBtn) {
                themeToggleBtn.addEventListener('click', function() {
                    const isLight = document.body.classList.toggle('light-theme');
                    if (isLight) {
                        localStorage.setItem('automatixes_theme', 'light');
                    } else {
                        localStorage.setItem('automatixes_theme', 'dark');
                    }
                });
            }
        });
    </script>
    
    <!-- Custom Main JS -->
    <script src="assets/js/main.js?v=1.0.2"></script>
</body>
</html>
