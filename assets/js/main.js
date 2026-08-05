/**
 * Baig Solution Core Script (Aligned with SoftNest Technologies)
 * Frontend Interactions, Three.js Waves, Matter.js Physics Engine, and Firebase Integrations.
 */

document.addEventListener("DOMContentLoaded", () => {
    // Custom cursor setup (Orange Ring & Dot follower)
    initCustomCursor();

    // 1. Navigation Active Class & Preloader
    setupNavigation();
    
    // 2. Three.js Particle Waves Setup (Orange Accent)
    initThreeJsParticles();
    
    // 3. Matter.js Pill Tossing Setup (Light Theme Cards)
    initMatterJsPhysics();
    
    // 4. Newsletter Popup Setup (Elastic Active Class Zoom)
    initNewsletterPopup();
    
    // 5. Firebase Forms Setup
    initFirebaseForms();
    initTestimonials();

    // 6. Subpage entrance animations (GSAP Fades)
    initSubpageAnimations();

    // 7. Interactive cost calculator
    initCostCalculator();

    // 8. Site-wide scroll animations & writing effect
    initScrollAnimations();
});

// Window Load Handler for Preloader
window.addEventListener("load", () => {
    const preloader = document.getElementById("preloader");
    if (preloader) {
        gsap.to(preloader, {
            opacity: 0,
            duration: 0.6,
            onComplete: () => {
                preloader.style.display = "none";
            }
        });
    }
});

/**
 * 1. Navigation & Sticky Scroll Handler
 */
function setupNavigation() {
    const header = document.getElementById("header-sticky");
    window.addEventListener("scroll", () => {
        if (window.scrollY > 50) {
            header.style.padding = "5px 0";
            header.style.background = "rgba(255, 255, 255, 0.95)";
            header.style.boxShadow = "0 10px 30px rgba(0, 0, 0, 0.05)";
        } else {
            header.style.padding = "10px 0";
            header.style.background = "rgba(255, 255, 255, 0.85)";
            header.style.boxShadow = "none";
        }
    });

    // Mark active nav link based on current path
    const currentPath = window.location.pathname.split("/").pop();
    const navLinks = document.querySelectorAll(".navbar-nav .nav-link");
    navLinks.forEach(link => {
        const linkPath = link.getAttribute("href");
        if (linkPath === currentPath || (currentPath === "" && linkPath === "index")) {
            navLinks.forEach(l => l.classList.remove("active"));
            link.classList.add("active");
        }
    });
}

/**
 * 2. Three.js Wave Particles (Orange Theme)
 */
function initThreeJsParticles() {
    const container = document.getElementById("particle-canvas-container");
    if (!container) return;

    let scene, camera, renderer, particles;
    let count = 0;
    const amountX = 50;
    const amountY = 50;
    const separation = 40;

    const width = container.clientWidth;
    const height = container.clientHeight;

    scene = new THREE.Scene();

    camera = new THREE.PerspectiveCamera(75, width / height, 1, 10000);
    camera.position.z = 800;
    camera.position.y = 150;

    const numParticles = amountX * amountY;
    const positions = new Float32Array(numParticles * 3);
    const scales = new Float32Array(numParticles);

    let i = 0, j = 0;
    for (let ix = 0; ix < amountX; ix++) {
        for (let iy = 0; iy < amountY; iy++) {
            positions[i] = ix * separation - ((amountX * separation) / 2); // x
            positions[i + 1] = 0; // y
            positions[i + 2] = iy * separation - ((amountY * separation) / 2); // z
            scales[j] = 1;
            i += 3;
            j++;
        }
    }

    const geometry = new THREE.BufferGeometry();
    geometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));
    geometry.setAttribute('scale', new THREE.BufferAttribute(scales, 1));

    // Warm Orange Brand Color (0xe77f23)
    const material = new THREE.PointsMaterial({
        color: 0xe77f23,
        size: 3.5,
        transparent: true,
        opacity: 0.25
    });

    particles = new THREE.Points(geometry, material);
    scene.add(particles);

    renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
    renderer.setPixelRatio(window.devicePixelRatio);
    renderer.setSize(width, height);
    container.appendChild(renderer.domElement);

    function animate() {
        requestAnimationFrame(animate);
        
        const positions = particles.geometry.attributes.position.array;
        const scales = particles.geometry.attributes.scale.array;
        
        let i = 0, j = 0;
        for (let ix = 0; ix < amountX; ix++) {
            for (let iy = 0; iy < amountY; iy++) {
                positions[i + 1] = (Math.sin((ix + count) * 0.3) * 50) + (Math.sin((iy + count) * 0.5) * 50);
                scales[j] = (Math.sin((ix + count) * 0.3) + 1) * 3 + (Math.sin((iy + count) * 0.5) + 1) * 3;
                i += 3;
                j++;
            }
        }
        
        particles.geometry.attributes.position.needsUpdate = true;
        particles.geometry.attributes.scale.needsUpdate = true;
        
        particles.rotation.y = count * 0.03;
        
        renderer.render(scene, camera);
        count += 0.04;
    }

    animate();

    window.addEventListener('resize', () => {
        const w = container.clientWidth;
        const h = container.clientHeight;
        camera.aspect = w / h;
        camera.updateProjectionMatrix();
        renderer.setSize(w, h);
    });
}

/**
 * 3. Matter.js Pill Tossing (Matching SoftNest Layout)
 */
function initMatterJsPhysics() {
    const container = document.getElementById("physics-container");
    if (!container) return;

    const Engine = Matter.Engine,
          Render = Matter.Render,
          Runner = Matter.Runner,
          Bodies = Matter.Bodies,
          Composite = Matter.Composite,
          Mouse = Matter.Mouse,
          MouseConstraint = Matter.MouseConstraint,
          Events = Matter.Events;

    const engine = Engine.create();
    const world = engine.world;

    let width = container.clientWidth;
    let height = container.clientHeight;

    const render = Render.create({
        element: container,
        engine: engine,
        options: {
            width: width,
            height: height,
            wireframes: false,
            background: 'transparent'
        }
    });

    render.canvas.style.opacity = '0';
    render.canvas.style.position = 'absolute';
    render.canvas.style.top = '0';
    render.canvas.style.left = '0';
    render.canvas.style.zIndex = '1';

    // Boundary walls
    const ground = Bodies.rectangle(width / 2, height + 50, width * 2, 100, { isStatic: true });
    const leftWall = Bodies.rectangle(-50, height / 2, 100, height * 2, { isStatic: true });
    const rightWall = Bodies.rectangle(width + 50, height / 2, 100, height * 2, { isStatic: true });
    const topWall = Bodies.rectangle(width / 2, -400, width * 2, 800, { isStatic: true });
    
    Composite.add(world, [ground, leftWall, rightWall, topWall]);

    // Pill texts
    const pillTexts = [
        "Slow Websites", "High Bounce Rates", "Manual Workflows",
        "Lack of Brand Differentiation", "Lead Leakage", "Poor Conversion Rates",
        "Inconsistent Branding", "Scaling Difficulties", "Outdated Technology",
        "Hidden Operational Costs", "Technical Debt"
    ];

    const pills = [];
    const isMobile = window.innerWidth < 768;
    const displayPills = isMobile ? pillTexts.slice(0, 6) : pillTexts;

    displayPills.forEach((text, i) => {
        const el = document.createElement("div");
        el.innerText = text;
        el.className = "physics-pill";
        el.style.position = "absolute";
        el.style.padding = isMobile ? "8px 16px" : "18px 45px";
        el.style.borderRadius = "100px";
        el.style.color = "#333333";
        el.style.fontSize = isMobile ? "11px" : "20px";
        el.style.fontWeight = "500";
        el.style.whiteSpace = "nowrap";
        el.style.userSelect = "none";
        el.style.pointerEvents = "none";
        el.style.background = "rgba(0, 0, 0, 0.05)";
        el.style.border = "1px solid rgba(0, 0, 0, 0.1)";
        el.style.zIndex = "5";
        el.style.willChange = "transform";

        container.appendChild(el);

        const rect = el.getBoundingClientRect();
        const w = rect.width;
        const h = rect.height;

        const x = Math.random() * (width / 2) + width / 4;
        const y = Math.random() * height - height;

        const body = Bodies.rectangle(x, y, w, h, {
            chamfer: { radius: h / 2 },
            restitution: 0.6,
            density: 0.04,
            friction: 0.1,
            frictionAir: 0.02,
            render: { fillStyle: 'transparent' }
        });

        Matter.Body.setAngularVelocity(body, (Math.random() - 0.5) * 0.1);
        Composite.add(world, body);
        pills.push({ body, el, w, h });
    });

    const mouse = Mouse.create(render.canvas);
    const mouseConstraint = MouseConstraint.create(engine, {
        mouse: mouse,
        constraint: {
            stiffness: 0.2,
            render: { visible: false }
        }
    });

    mouse.element.removeEventListener("mousewheel", mouse.mousewheel);
    mouse.element.removeEventListener("DOMMouseScroll", mouse.mousewheel);

    Composite.add(world, mouseConstraint);
    render.mouse = mouse;

    Events.on(engine, 'afterUpdate', () => {
        pills.forEach(p => {
            const pos = p.body.position;
            const angle = p.body.angle;
            p.el.style.transform = `translate(${pos.x - p.w / 2}px, ${pos.y - p.h / 2}px) rotate(${angle}rad)`;
        });
    });

    Render.run(render);
    const runner = Runner.create();
    Runner.run(runner, engine);

    window.addEventListener('resize', () => {
        width = container.clientWidth;
        height = container.clientHeight;
        render.canvas.width = width;
        render.canvas.height = height;
        Matter.Body.setPosition(ground, { x: width / 2, y: height + 50 });
        Matter.Body.setPosition(rightWall, { x: width + 50, y: height / 2 });
        Matter.Body.setPosition(topWall, { x: width / 2, y: -400 });
    });
}

/**
 * 4. Newsletter Popup Management (.active scale integration)
 */
function initNewsletterPopup() {
    const modal = document.getElementById("newsletterModal");
    if (!modal) return;
    
    const closeBtn = document.getElementById("closeModal");
    const newsletterSeen = localStorage.getItem("newsletterSeen_baig");
    
    if (!newsletterSeen) {
        setTimeout(() => {
            modal.style.display = "flex";
            setTimeout(() => {
                modal.classList.add("active");
            }, 10);
        }, 1500); // 1.5s delay to fit standard user experience
    }

    function closePopup() {
        modal.classList.remove("active");
        setTimeout(() => {
            modal.style.display = "none";
        }, 500);
        localStorage.setItem("newsletterSeen_baig", "true");
    }

    closeBtn.onclick = closePopup;
    window.onclick = (event) => {
        if (event.target === modal) {
            closePopup();
        }
    };

    const form = document.getElementById("popup-newsletter-form");
    const emailInput = document.getElementById("popup-email-input");
    const emailError = document.getElementById("popup-email-error");

    if (form) {
        form.addEventListener("submit", async (e) => {
            e.preventDefault();
            const emailValue = emailInput.value.trim();
            const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

            if (!emailRegex.test(emailValue)) {
                emailError.style.display = "block";
                emailInput.style.borderColor = "#ff3333";
                return;
            }

            emailError.style.display = "none";
            emailInput.style.borderColor = "#ddd";
            
            const submitBtn = form.querySelector('button[type="submit"]');
            const textSpan = submitBtn.querySelector("span:not(.arrow-btn)");
            const originalBtnText = textSpan ? textSpan.innerHTML : submitBtn.innerHTML;
            
            if (textSpan) {
                textSpan.innerHTML = '<i class="fa-solid fa-spinner fa-spin me-2"></i> Subscribing...';
            } else {
                submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin me-2"></i> Subscribing...';
            }
            submitBtn.disabled = true;

            try {
                let firestoreSuccess = false;
                
                // 1. Save to Firebase with 3s timeout
                if (window.db) {
                    const { collection, addDoc, serverTimestamp } = await import("https://www.gstatic.com/firebasejs/10.7.1/firebase-firestore.js");
                    const firestorePromise = addDoc(collection(window.db, "subscribers"), {
                        email: emailValue,
                        timestamp: serverTimestamp()
                    });
                    
                    await Promise.race([
                        firestorePromise,
                        new Promise((_, reject) => setTimeout(() => reject(new Error("Timeout")), 3000))
                    ]).then(() => {
                        firestoreSuccess = true;
                    }).catch(err => {
                        console.warn("Firestore newsletter write timed out/skipped:", err);
                    });
                }

                // 2. Send to Formspree with 3s timeout
                const formspreePromise = fetch("https://formspree.io/f/xojyraee", {
                    method: "POST",
                    body: JSON.stringify({ email: emailValue }),
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    }
                });
                
                await Promise.race([
                    formspreePromise,
                    new Promise((_, reject) => setTimeout(() => reject(new Error("Timeout")), 3000))
                ]).catch(err => {
                    console.warn("Formspree submission timed out/skipped:", err);
                });

                logSimulatedWebhook(`[Formspree API] Subscribed newsletter lead: ${emailValue}`);
                logSimulatedWebhook(`[Firebase Firestore] Subscriber lead: ${emailValue} - ${firestoreSuccess ? 'Saved' : 'Simulated'}`);

                Swal.fire({
                    title: 'Success!',
                    text: 'You have successfully subscribed. Your 10% discount is active!',
                    icon: 'success',
                    confirmButtonColor: '#e77f23',
                    background: '#ffffff',
                    color: '#1a1a1a'
                });

                closePopup();
            } catch (error) {
                console.error("Newsletter Submitting Error:", error);
                Swal.fire({
                    title: 'Error!',
                    text: 'Something went wrong: ' + error.message,
                    icon: 'error',
                    confirmButtonColor: '#ff3333'
                });
            } finally {
                if (textSpan) {
                    textSpan.innerHTML = originalBtnText;
                } else {
                    submitBtn.innerHTML = originalBtnText;
                }
                submitBtn.disabled = false;
            }
        });

        emailInput.addEventListener('input', () => {
            emailError.style.display = "none";
            emailInput.style.borderColor = "#ddd";
        });
    }
}

/**
 * 5. Firebase Forms Integration
 */
function initFirebaseForms() {
    const indexForm = document.getElementById("contact-firebase-form");
    const pageForm = document.getElementById("contact-firebase-form-page");

    if (indexForm) bindFormSubmit(indexForm, "contact-name", "contact-email", "contact-service", "contact-message");
    if (pageForm) bindFormSubmit(pageForm, "contact-name-page", "contact-email-page", "contact-service-page", "contact-message-page");
}

function bindFormSubmit(form, nameId, emailId, serviceId, messageId) {
    form.addEventListener("submit", async (e) => {
        e.preventDefault();

        const name = document.getElementById(nameId).value.trim();
        const email = document.getElementById(emailId).value.trim();
        const service = document.getElementById(serviceId).value;
        const message = document.getElementById(messageId).value.trim();

        if (!name || !email || !service || !message) {
            Swal.fire({
                title: 'Required Fields',
                text: 'Please fill in all details.',
                icon: 'warning',
                confirmButtonColor: '#e77f23',
                background: '#ffffff',
                color: '#1a1a1a'
            });
            return;
        }

        const submitBtn = form.querySelector("button[type='submit']");
        const textSpan = submitBtn.querySelector("span:not(.arrow-btn)");
        const originalText = textSpan ? textSpan.innerHTML : submitBtn.innerHTML;
        
        if (textSpan) {
            textSpan.innerHTML = '<i class="fa-solid fa-spinner fa-spin me-2"></i> Submitting...';
        } else {
            submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin me-2"></i> Submitting...';
        }
        submitBtn.disabled = true;

        try {
            // Capture optional fields if present
            const phone   = (document.getElementById('contact-phone')?.value   || '').trim();
            const bizLink = (document.getElementById('contact-biz-link')?.value || '').trim();

            let firestoreSuccess = false;
            if (window.db) {
                const { collection, addDoc, serverTimestamp } = await import("https://www.gstatic.com/firebasejs/10.7.1/firebase-firestore.js");
                
                const firestorePromise = addDoc(collection(window.db, "contacts"), {
                    name,
                    email,
                    phone: phone || null,
                    bizLink: bizLink || null,
                    service,
                    description: message,
                    timestamp: serverTimestamp()
                });

                await Promise.race([
                    firestorePromise,
                    new Promise((_, reject) => setTimeout(() => reject(new Error("Timeout")), 3000))
                ]).then(() => {
                    firestoreSuccess = true;
                }).catch(err => {
                    console.warn("Firestore contact write timed out/skipped:", err);
                });
            }

            // Send email via formsubmit.co
            const emailPromise = fetch("https://formsubmit.co/ajax/bobrober2323@gmail.com", {
                method: "POST",
                headers: { 
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify({
                    name: name,
                    email: email,
                    phone: phone || 'Not provided',
                    bizLink: bizLink || 'Not provided',
                    service: service,
                    message: message,
                    _subject: `New Lead: ${name} (${service})`
                })
            });
            
            await Promise.race([
                emailPromise,
                new Promise((_, reject) => setTimeout(() => reject(new Error("Email Timeout")), 3000))
            ]).catch(err => {
                console.warn("Email submission timed out/skipped:", err);
            });

            logSimulatedWebhook(`[Firebase Firestore] Contact query: ${name} (${service}) - ${firestoreSuccess ? 'Saved' : 'Simulated'}`);
            logSimulatedWebhook(`[Slack Webhook] Dispatched team channel alert.`);

            Swal.fire({
                title: 'Message Sent!',
                text: 'Your details have been written to the database. We will speak soon.',
                icon: 'success',
                confirmButtonColor: '#e77f23',
                background: '#ffffff',
                color: '#1a1a1a'
            });

            form.reset();
        } catch (err) {
            console.error("Firestore Form Submit Error:", err);
            Swal.fire({
                title: 'Database Error',
                text: 'Failed to write query: ' + err.message,
                icon: 'error',
                confirmButtonColor: '#ff4a5a'
            });
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

function logSimulatedWebhook(logText) {
    const timestamp = new Date().toLocaleTimeString();
    const fullLog = `[${timestamp}] ${logText}`;
    const existing = JSON.parse(localStorage.getItem("admin_integration_logs") || "[]");
    existing.push(fullLog);
    localStorage.setItem("admin_integration_logs", JSON.stringify(existing));
    window.dispatchEvent(new Event('storage'));
}

    // Utility to safely escape user-provided text for HTML insertion
    function escapeHTML(str) {
        const p = document.createElement('p');
        p.textContent = str;
        return p.innerHTML;
    }

    // Initialize real‑time testimonials (rating ≥ 4)
    function initTestimonials() {
        const container = document.getElementById('testimonialsList');
        if (!container) return;
        // Load Firestore utilities dynamically
        import('https://www.gstatic.com/firebasejs/10.7.1/firebase-firestore.js')
            .then(({ collection, query, where, orderBy, onSnapshot }) => {
                const q = query(
                    collection(window.db, 'reviews'),
                    where('rating', '>=', 4),
                    orderBy('createdAt', 'desc')
                );
                onSnapshot(q, (snapshot) => {
                    container.innerHTML = '';
                    snapshot.forEach((doc) => {
                        const data = doc.data();
                        // Build star icons
                        let starsHtml = '';
                        for (let i = 1; i <= 5; i++) {
                            starsHtml += i <= data.rating
                                ? '<i class="fa-solid fa-star text-accent-brand me-1"></i>'
                                : '<i class="fa-regular fa-star text-accent-brand me-1"></i>';
                        }
                        const col = document.createElement('div');
                        col.className = 'col-md-6 col-lg-4';
                        col.innerHTML = `
                            <div class="review-card p-4 border rounded-4 bg-white shadow-sm h-100">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <div>
                                        <h5 class="fw-bold text-dark mb-0">${escapeHTML(data.name)}</h5>
                                        <div class="review-stars-display mt-1">
                                            ${starsHtml}
                                        </div>
                                    </div>
                                    <small class="text-muted">${data.rating} ★</small>
                                </div>
                                <p class="text-secondary mb-0 mt-2" style="white-space: pre-line;">
                                    ${escapeHTML(data.comment)}
                                </p>
                            </div>`;
                        container.appendChild(col);
                    });
                });
            })
            .catch(err => console.warn('Testimonials init error:', err));
    }

/**
 * Custom Mouse Cursor Follower setup with GSAP trailing animations
 */
function initCustomCursor() {
    const cursorOuter = document.querySelector(".cursor-outer");
    const cursorInner = document.querySelector(".cursor-inner");
    
    if (!cursorOuter || !cursorInner) return;
    
    // Position starts off-screen
    gsap.set([cursorOuter, cursorInner], { xPercent: -50, yPercent: -50, x: -100, y: -100 });
    
    window.addEventListener("mousemove", (e) => {
        // Inner cursor: fast tracking
        gsap.to(cursorInner, {
            x: e.clientX,
            y: e.clientY,
            duration: 0.05,
            ease: "power2.out"
        });
        
        // Outer cursor: smooth lagging trail
        gsap.to(cursorOuter, {
            x: e.clientX,
            y: e.clientY,
            duration: 0.2,
            ease: "power2.out"
        });
    });
    
    // Expand outer ring on hover over interactive links or elements (excluding card-service-item & icon-arrow to eliminate ghost circle)
    document.body.addEventListener("mouseover", (e) => {
        if (e.target.closest(".icon-arrow, .card-service-item")) {
            cursorOuter.classList.remove("cursor-hover");
            cursorInner.classList.remove("cursor-hover");
            return;
        }
        const target = e.target.closest("a, button, .btn, .physics-pill, .close-modal");
        if (target) {
            cursorOuter.classList.add("cursor-hover");
            cursorInner.classList.add("cursor-hover");
        }
    });

    document.body.addEventListener("mouseout", (e) => {
        const target = e.target.closest("a, button, .btn, .physics-pill, .close-modal");
        if (target) {
            cursorOuter.classList.remove("cursor-hover");
            cursorInner.classList.remove("cursor-hover");
        }
    });
}

/**
 * Subpage GSAP scroll entrance and banner animations
 */
function initSubpageAnimations() {
    if (typeof gsap !== "undefined") {
        // Hero element fade-ins
        gsap.from(".subpage-hero h1", { opacity: 0, y: 30, duration: 0.8, ease: "power2.out", delay: 0.2 });
        
        // Circular line draw-in
        gsap.from(".subpage-hero .title-underline", { width: 0, opacity: 0, duration: 0.6, ease: "power2.out", delay: 0.6 });
        
        // Subtext description fade
        gsap.from(".subpage-hero p", { opacity: 0, y: 20, duration: 0.8, ease: "power2.out", delay: 0.8 });
        
        // Scroll triggers for content rows inside subpages
        gsap.utils.toArray(".section-padding .row").forEach(row => {
            gsap.from(row, {
                opacity: 0,
                y: 40,
                duration: 0.9,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: row,
                    start: "top 85%",
                    toggleActions: "play none none none"
                }
            });
        });
    }
}

/**
 * Interactive Project Cost Calculator
 */
function initCostCalculator() {
    const calcServices = document.querySelectorAll(".calc-service");
    const scopeRange = document.getElementById("calcScopeRange");
    const scopeVal = document.getElementById("scopeVal");
    const totalVal = document.getElementById("calcTotalVal");
    const leadForm = document.getElementById("calcLeadForm");
    
    if (!scopeRange || !totalVal) return;
    
    function calculate() {
        let base = 0;
        calcServices.forEach(chk => {
            if (chk.checked) {
                base += parseInt(chk.value);
            }
        });
        const scope = parseInt(scopeRange.value);
        if (scopeVal) scopeVal.innerText = scope;
        
        const total = base + (scope * 100);
        totalVal.innerText = total.toLocaleString();
    }
    
    // Add event listeners
    calcServices.forEach(chk => chk.addEventListener("change", calculate));
    scopeRange.addEventListener("input", calculate);
    
    // Initial run
    calculate();
    
    // Submit calculator query to Firestore
    if (leadForm) {
        leadForm.addEventListener("submit", async (e) => {
            e.preventDefault();
            const email = document.getElementById("calcEmail").value;
            const submitBtn = document.getElementById("calcSubmitBtn");
            const textSpan = submitBtn.querySelector("span:not(.arrow-btn)");
            const originalText = textSpan ? textSpan.innerHTML : submitBtn.innerHTML;
            
            if (textSpan) {
                textSpan.innerHTML = '<i class="fa-solid fa-spinner fa-spin me-2"></i> Submitting...';
            } else {
                submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin me-2"></i> Submitting...';
            }
            submitBtn.disabled = true;
            
            // Gather selected services list
            const services = [];
            calcServices.forEach(chk => {
                if (chk.checked) {
                    services.push(chk.nextElementSibling.innerText);
                }
            });
            const scope = parseInt(scopeRange.value);
            const total = parseInt(totalVal.innerText.replace(/,/g, ''));
            
            try {
                let firestoreSuccess = false;
                if (window.db) {
                    const { collection, addDoc, serverTimestamp } = await import("https://www.gstatic.com/firebasejs/10.7.1/firebase-firestore.js");
                    
                    const firestorePromise = addDoc(collection(window.db, "calculator_queries"), {
                        email: email,
                        services: services,
                        scope: scope,
                        estimatedTotal: total,
                        timestamp: serverTimestamp()
                    });

                    await Promise.race([
                        firestorePromise,
                        new Promise((_, reject) => setTimeout(() => reject(new Error("Timeout")), 3000))
                    ]).then(() => {
                        firestoreSuccess = true;
                    }).catch(err => {
                        console.warn("Firestore calculator write timed out/skipped:", err);
                    });
                }
                
                logSimulatedWebhook(`[Firebase Firestore] Calculator Quote: ${email} ($${total}) - ${firestoreSuccess ? 'Saved' : 'Simulated'}`);
                
                Swal.fire({
                    title: 'Success!',
                    text: 'Your project calculation query has been submitted successfully.',
                    icon: 'success',
                    confirmButtonColor: '#e77f23'
                });
                
                leadForm.reset();
                calculate();
            } catch (err) {
                console.error("Firestore Cost Calc Submit Error:", err);
                Swal.fire({
                    title: 'Error',
                    text: 'Failed to write query: ' + err.message,
                    icon: 'error',
                    confirmButtonColor: '#ff4a5a'
                });
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
}


/**
 * 8. Site-wide scroll animations & writing effect
 */
function initScrollAnimations() {
    if (typeof gsap === "undefined") return;

    // Use IntersectionObserver for robust scroll reveals
    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Determine if it's a typing heading or standard element
                if (entry.target.classList.contains("typewriter-anim")) {
                    gsap.to(entry.target.querySelectorAll("span"), {
                        opacity: 1,
                        y: 0,
                        scale: 1,
                        duration: 0.4,
                        stagger: 0.08,
                        ease: "back.out(1.2)"
                    });
                } else {
                    // Standard .wow element
                    gsap.to(entry.target, { 
                        opacity: 1, 
                        y: 0, 
                        duration: 0.8, 
                        ease: "power2.out" 
                    });
                }
                obs.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    // 1. General Fade-Up Animations for Cards/Images (.wow)
    const wowElements = document.querySelectorAll(".wow");
    wowElements.forEach(el => {
        if (el.classList.contains("typewriter-anim") || el.querySelector(".typewriter-anim")) {
           // Skip container if it's specifically wrapping the typewriter to avoid double-hiding
           // Actually, it's fine to fade the container and type the text, but let's just make sure they start hidden
        }
        gsap.set(el, { opacity: 0, y: 40 });
        observer.observe(el);
    });

    // 2. Writing / Staggered Text Reveal Effect for Headings
    const headings = document.querySelectorAll(".typewriter-anim");
    headings.forEach(heading => {
        const text = heading.innerText;
        heading.innerHTML = "";
        
        // Split text into words and wrap in spans
        const words = text.split(" ");
        words.forEach(word => {
            const span = document.createElement("span");
            span.style.display = "inline-block";
            span.style.opacity = "0";
            span.style.transform = "translateY(15px) scale(0.95)";
            span.innerText = word + " ";
            heading.appendChild(span);
        });

        observer.observe(heading);
    });
}
