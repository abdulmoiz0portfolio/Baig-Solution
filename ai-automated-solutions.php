<?php 
$page_key = 'ai-automated-solutions'; 
include 'header.php'; 
?>

<!-- Hero Section -->
<section class="hero-section position-relative overflow-hidden" style="padding-top: 180px; padding-bottom: 120px;">
    <!-- Abstract Glowing Orbs -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="z-index: 0; pointer-events: none; overflow: hidden;">
        <div class="position-absolute" style="top: -10%; left: -10%; width: 50vw; height: 50vw; background: radial-gradient(circle, rgba(231,127,35,0.15) 0%, rgba(0,0,0,0) 70%); filter: blur(60px);"></div>
        <div class="position-absolute" style="bottom: -20%; right: -10%; width: 60vw; height: 60vw; background: radial-gradient(circle, rgba(204,255,0,0.1) 0%, rgba(0,0,0,0) 70%); filter: blur(80px);"></div>
    </div>
    
    <div class="container position-relative" style="z-index: 2;">
        <div class="text-center mx-auto" style="max-width: 900px;">
            <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-surface-2 border border-light-subtle mb-4 wow fadeInUp">
                <span class="d-inline-block rounded-circle" style="width:8px; height:8px; background:var(--accent-neon); box-shadow: 0 0 10px var(--accent-neon);"></span>
                <span class="text-white small fw-semibold tracking-wide text-uppercase">End-to-End AI Integration</span>
            </div>
            
            <h1 class="display-2 fw-bold mb-4" style="line-height: 1.1; letter-spacing: -2px; color: #ffffff;">
                AI Agents & <br>
                <span style="color: var(--accent-neon);">Workflow Automations.</span>
            </h1>
            
            <p class="lead mx-auto mb-5" style="max-width: 650px; font-size: 1.15rem; color: #9ca3af;">
                Streamline operations, eliminate manual bottlenecks, and deploy intelligent agents that handle customer service and qualify leads 24/7.
            </p>
            
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="contact" class="btn-magnetic btn-magnetic-neon" data-cursor="magnetic">
                    <span class="btn-magnetic-inner">Start Your Project <i class="fa-solid fa-arrow-right ms-1"></i></span>
                </a>
                <a href="portfolio" class="btn-magnetic btn-magnetic-primary" data-cursor="magnetic">
                    <span class="btn-magnetic-inner">View Case Studies</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Autonomous Agents Section -->
<section class="section-padding position-relative border-top border-light-subtle">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5">
                <div class="pe-lg-4">
                    <h2 class="display-5 fw-bold mb-4">Autonomous <span style="color: var(--accent-orange);">AI Agents</span></h2>
                    <p class="fs-5 text-secondary mb-4">Deploy intelligent natural language agents trained on your exact business data to handle customer support, qualify inbound leads, and route complex queries—all without human intervention.</p>
                    <ul class="list-unstyled mb-5">
                        <li class="d-flex align-items-center mb-3">
                            <div class="me-3 d-flex align-items-center justify-content-center rounded-circle bg-surface-2" style="width: 48px; height: 48px; border: 1px solid rgba(255,255,255,0.1);">
                                <i class="fa-solid fa-headset text-accent-brand"></i>
                            </div>
                            <div>
                                <h5 class="mb-1 text-white fw-semibold">24/7 Customer Support</h5>
                                <p class="mb-0 text-muted small">Instantly resolve queries using your knowledge base.</p>
                            </div>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <div class="me-3 d-flex align-items-center justify-content-center rounded-circle bg-surface-2" style="width: 48px; height: 48px; border: 1px solid rgba(255,255,255,0.1);">
                                <i class="fa-solid fa-filter text-accent-brand"></i>
                            </div>
                            <div>
                                <h5 class="mb-1 text-white fw-semibold">Intelligent Lead Qualification</h5>
                                <p class="mb-0 text-muted small">Screen and score leads before they hit your sales team.</p>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="me-3 d-flex align-items-center justify-content-center rounded-circle bg-surface-2" style="width: 48px; height: 48px; border: 1px solid rgba(255,255,255,0.1);">
                                <i class="fa-solid fa-microphone text-accent-brand"></i>
                            </div>
                            <div>
                                <h5 class="mb-1 text-white fw-semibold">Voice AI Integrations</h5>
                                <p class="mb-0 text-muted small">Inbound & outbound calling via advanced voice models.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="card-glass p-4 rounded-4 position-relative">
                    <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?auto=format&fit=crop&w=800&q=80" alt="AI Agents Interface" class="img-fluid rounded-3" style="filter: brightness(0.8) contrast(1.2);">
                    <div class="position-absolute bottom-0 start-0 m-4 p-3 bg-dark rounded-3 border border-light-subtle d-flex align-items-center gap-3" style="backdrop-filter: blur(10px);">
                        <div class="spinner-grow text-accent-neon spinner-grow-sm" role="status"></div>
                        <span class="text-white fw-semibold small">Agent analyzing context...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Workflow Automations Section -->
<section class="section-padding position-relative bg-surface-1">
    <div class="container">
        <div class="row align-items-center g-5 flex-lg-row-reverse">
            <div class="col-lg-5">
                <div class="ps-lg-4">
                    <h2 class="display-5 fw-bold mb-4">Workflow <span style="color: var(--accent-neon);">Automations</span></h2>
                    <p class="fs-5 text-secondary mb-4">Link your tools, databases, and communication channels. We build robust data pipelines using n8n and Make to sync operations flawlessly and eliminate manual copy-pasting.</p>
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <span class="badge bg-surface-2 border border-light-subtle text-white px-3 py-2">n8n</span>
                        <span class="badge bg-surface-2 border border-light-subtle text-white px-3 py-2">Make.com</span>
                        <span class="badge bg-surface-2 border border-light-subtle text-white px-3 py-2">GoHighLevel</span>
                        <span class="badge bg-surface-2 border border-light-subtle text-white px-3 py-2">Zapier</span>
                        <span class="badge bg-surface-2 border border-light-subtle text-white px-3 py-2">Webhooks</span>
                    </div>
                    <ul class="list-unstyled text-secondary mb-0">
                        <li class="mb-2"><i class="fa-solid fa-circle-check text-accent-neon me-2"></i> <strong>Form-to-CRM:</strong> Instant HubSpot or Salesforce mapping.</li>
                        <li class="mb-2"><i class="fa-solid fa-circle-check text-accent-neon me-2"></i> <strong>Channel Alerts:</strong> Slack & Discord lead notifications.</li>
                        <li class="mb-2"><i class="fa-solid fa-circle-check text-accent-neon me-2"></i> <strong>Calendar Syncs:</strong> Automated booking coordination.</li>
                        <li class="mb-2"><i class="fa-solid fa-circle-check text-accent-neon me-2"></i> <strong>Auto Invoicing:</strong> Auto generation via QuickBooks.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row g-4">
                    <div class="col-sm-6">
                        <div class="card-glass p-4 rounded-4 h-100 text-center" data-cursor="magnetic">
                            <i class="fa-solid fa-diagram-project fs-1 text-accent-brand mb-3"></i>
                            <h4 class="text-white mb-2">Visual Logic</h4>
                            <p class="text-muted small mb-0">Complex decision trees built visually, ensuring easily maintainable automation logic.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card-glass p-4 rounded-4 h-100 text-center" data-cursor="magnetic">
                            <i class="fa-solid fa-bolt fs-1 text-accent-neon mb-3"></i>
                            <h4 class="text-white mb-2">Instant Triggers</h4>
                            <p class="text-muted small mb-0">Webhook-driven events that fire the moment a customer interacts with your business.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="section-padding position-relative border-top border-light-subtle">
    <div class="container">
        <div class="text-center mb-5 pb-3">
            <h2 class="display-5 fw-bold mb-3">Why <span style="color: var(--accent-neon);">Automate?</span></h2>
            <p class="fs-5 text-secondary mx-auto max-w-700">The core benefits of integrating AI agents and automated workflows into your operations.</p>
        </div>
        <div class="row g-4">
            <!-- Benefit 1 -->
            <div class="col-md-6 col-lg-3">
                <div class="card-glass p-4 rounded-4 h-100">
                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-surface-2 mb-4" style="width: 56px; height: 56px; border: 1px solid rgba(255,255,255,0.1);">
                        <i class="fa-solid fa-clock-rotate-left fs-4 text-accent-neon"></i>
                    </div>
                    <h5 class="text-white fw-bold mb-3">Save Hundreds of Hours</h5>
                    <p class="text-muted small mb-0">Eliminate repetitive manual tasks like copy-pasting data across platforms, freeing your team for high-value work.</p>
                </div>
            </div>
            <!-- Benefit 2 -->
            <div class="col-md-6 col-lg-3">
                <div class="card-glass p-4 rounded-4 h-100">
                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-surface-2 mb-4" style="width: 56px; height: 56px; border: 1px solid rgba(255,255,255,0.1);">
                        <i class="fa-solid fa-shield-halved fs-4 text-accent-brand"></i>
                    </div>
                    <h5 class="text-white fw-bold mb-3">Zero Human Error</h5>
                    <p class="text-muted small mb-0">Data pipelines map fields flawlessly every single time. No more missed leads, typos, or forgotten follow-ups.</p>
                </div>
            </div>
            <!-- Benefit 3 -->
            <div class="col-md-6 col-lg-3">
                <div class="card-glass p-4 rounded-4 h-100">
                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-surface-2 mb-4" style="width: 56px; height: 56px; border: 1px solid rgba(255,255,255,0.1);">
                        <i class="fa-solid fa-bolt fs-4 text-accent-neon"></i>
                    </div>
                    <h5 class="text-white fw-bold mb-3">24/7 Operations</h5>
                    <p class="text-muted small mb-0">Your AI agents and webhooks never sleep. Respond to inquiries and qualify leads instantly at 3 AM.</p>
                </div>
            </div>
            <!-- Benefit 4 -->
            <div class="col-md-6 col-lg-3">
                <div class="card-glass p-4 rounded-4 h-100">
                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-surface-2 mb-4" style="width: 56px; height: 56px; border: 1px solid rgba(255,255,255,0.1);">
                        <i class="fa-solid fa-arrow-trend-up fs-4 text-accent-orange"></i>
                    </div>
                    <h5 class="text-white fw-bold mb-3">Infinite Scalability</h5>
                    <p class="text-muted small mb-0">Handle 10 leads or 10,000 leads with the exact same infrastructure without hiring additional admin staff.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Projects Custom Styles */
.project-card {
    position: relative;
    border-radius: 16px;
    overflow: hidden;
    cursor: none;
    border: 1px solid rgba(255,255,255,0.08);
}
.project-card .media-container {
    width: 100%;
    aspect-ratio: 4/3;
    overflow: hidden;
    position: relative;
    background: #111;
}
.project-card .media-container img, 
.project-card .media-container video {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
}
.project-card:hover .media-container img,
.project-card:hover .media-container video {
    transform: scale(1.05);
}
.project-card .overlay {
    position: absolute;
    bottom: 0; left: 0; right: 0;
    padding: 24px;
    background: linear-gradient(to top, rgba(0,0,0,0.95) 0%, rgba(0,0,0,0.5) 50%, rgba(0,0,0,0) 100%);
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
}
.project-card h4 {
    margin: 0;
    color: #fff;
    font-weight: 600;
}
.project-card .btn-view {
    width: 40px; height: 40px;
    border-radius: 50%;
    background: var(--accent-brand);
    color: #fff;
    display: flex; align-items: center; justify-content: center;
    transform: translateY(20px);
    opacity: 0;
    transition: all 0.3s ease;
}
.project-card:hover .btn-view {
    transform: translateY(0);
    opacity: 1;
}

/* Lightbox Styles */
#projectLightbox {
    display: none;
    position: fixed;
    top: 0; left: 0; width: 100vw; height: 100vh;
    background: rgba(10,10,12,0.95);
    backdrop-filter: blur(10px);
    z-index: 9999999;
    align-items: center;
    justify-content: center;
}
#projectLightbox.active {
    display: flex;
}
.lightbox-content {
    position: relative;
    width: 90%;
    max-width: 1200px;
    height: 85vh;
    display: flex;
    align-items: center;
    justify-content: center;
}
.lightbox-item {
    display: none;
    max-width: 100%;
    max-height: 100%;
    border-radius: 8px;
    box-shadow: 0 20px 50px rgba(0,0,0,0.5);
    object-fit: contain;
}
.lightbox-item.active {
    display: block;
}
.lightbox-controls {
    position: absolute;
    top: 50%; left: -60px; right: -60px;
    transform: translateY(-50%);
    display: flex;
    justify-content: space-between;
    pointer-events: none;
}
.lightbox-btn {
    pointer-events: auto;
    width: 50px; height: 50px;
    border-radius: 50%;
    background: rgba(255,255,255,0.1);
    border: 1px solid rgba(255,255,255,0.2);
    color: white;
    font-size: 20px;
    display: flex; align-items: center; justify-content: center;
    cursor: none;
    transition: all 0.2s;
}
.lightbox-btn:hover { background: var(--accent-neon); color: black; border-color: var(--accent-neon); }
.lightbox-close {
    position: absolute;
    top: 30px; right: 30px;
    width: 45px; height: 45px;
    border-radius: 50%;
    background: rgba(255,255,255,0.1);
    color: white; border: 1px solid rgba(255,255,255,0.3);
    font-size: 22px;
    display: flex; align-items: center; justify-content: center;
    cursor: none;
    z-index: 10;
    transition: all 0.2s;
}
.lightbox-close:hover { background: rgba(255,0,0,0.8); color: white; border-color: transparent; }

@media (max-width: 768px) {
    .lightbox-controls { left: 10px; right: 10px; }
}
</style>

<!-- Projects Showcase Section -->
<section class="section-padding position-relative bg-surface-1 border-top border-light-subtle">
    <div class="container">
        <div class="text-center mb-5 pb-3">
            <span class="badge bg-surface-2 border border-light-subtle text-white px-3 py-2 mb-3">OUR WORK</span>
            <h2 class="display-5 fw-bold mb-3">Featured <span style="color: var(--accent-brand);">Projects</span></h2>
            <p class="fs-5 text-secondary mx-auto max-w-700">Explore some of the AI agents and automated systems we've built.</p>
        </div>
        
        <div class="row g-4">
            <!-- Project 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="project-card" onclick="openLightbox('project1')">
                    <div class="media-container">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80" alt="CRM Dashboard">
                    </div>
                    <div class="overlay">
                        <div>
                            <span class="badge bg-dark border border-light-subtle text-accent-neon mb-2">Automations</span>
                            <h4>CRM Sync Pipeline</h4>
                        </div>
                        <div class="btn-view"><i class="fa-solid fa-expand"></i></div>
                    </div>
                </div>
                <!-- Hidden Gallery Data -->
                <div id="gallery-project1" class="d-none">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1200&q=80" data-type="image">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1200&q=80" data-type="image">
                </div>
            </div>
            
            <!-- Project 2 (Video Thumb) -->
            <div class="col-md-6 col-lg-4">
                <div class="project-card hover-video-card" onclick="openLightbox('project2')">
                    <div class="media-container">
                        <video src="https://www.w3schools.com/html/mov_bbb.mp4" muted loop playsinline class="card-video"></video>
                        <img src="https://images.unsplash.com/photo-1620712943543-bcc4688e7485?auto=format&fit=crop&w=800&q=80" class="card-poster" style="position:absolute;top:0;left:0;z-index:2;pointer-events:none;transition:opacity 0.3s;">
                    </div>
                    <div class="overlay" style="z-index: 3;">
                        <div>
                            <span class="badge bg-dark border border-light-subtle text-accent-brand mb-2">AI Agents</span>
                            <h4>Voice Agent Demo</h4>
                        </div>
                        <div class="btn-view"><i class="fa-solid fa-play"></i></div>
                    </div>
                </div>
                <!-- Hidden Gallery Data -->
                <div id="gallery-project2" class="d-none">
                    <video src="https://www.w3schools.com/html/mov_bbb.mp4" data-type="video" controls></video>
                    <img src="https://images.unsplash.com/photo-1620712943543-bcc4688e7485?auto=format&fit=crop&w=1200&q=80" data-type="image">
                </div>
            </div>

            <!-- Project 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="project-card hover-video-card" onclick="openLightbox('project3')">
                    <div class="media-container">
                        <video src="https://www.w3schools.com/html/mov_bbb.mp4" muted loop playsinline class="card-video"></video>
                        <img src="https://images.unsplash.com/photo-1555949963-aa79dcee981c?auto=format&fit=crop&w=800&q=80" class="card-poster" style="position:absolute;top:0;left:0;z-index:2;pointer-events:none;transition:opacity 0.3s;">
                    </div>
                    <div class="overlay" style="z-index: 3;">
                        <div>
                            <span class="badge bg-dark border border-light-subtle text-accent-orange mb-2">Integration</span>
                            <h4>E-commerce Webhook</h4>
                        </div>
                        <div class="btn-view"><i class="fa-solid fa-expand"></i></div>
                    </div>
                </div>
                <!-- Hidden Gallery Data -->
                <div id="gallery-project3" class="d-none">
                    <video src="https://www.w3schools.com/html/mov_bbb.mp4" data-type="video" controls></video>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Lightbox Modal -->
<div id="projectLightbox">
    <button class="lightbox-close" onclick="closeLightbox()" data-cursor="magnetic"><i class="fa-solid fa-xmark"></i></button>
    <div class="lightbox-content">
        <div id="lightboxMediaContainer" style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center;">
            <!-- Media gets injected here -->
        </div>
        <div class="lightbox-controls">
            <button class="lightbox-btn" onclick="prevMedia()" data-cursor="magnetic"><i class="fa-solid fa-chevron-left"></i></button>
            <button class="lightbox-btn" onclick="nextMedia()" data-cursor="magnetic"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
    </div>
</div>

<script>
// Logic for Hover Video Playing
document.querySelectorAll('.hover-video-card').forEach(card => {
    const video = card.querySelector('.card-video');
    const poster = card.querySelector('.card-poster');
    
    card.addEventListener('mouseenter', () => {
        if(video) {
            let playPromise = video.play();
            if (playPromise !== undefined) {
                playPromise.then(_ => {
                    if(poster) poster.style.opacity = '0';
                }).catch(error => {
                    console.log('Autoplay prevented');
                });
            }
        }
    });
    card.addEventListener('mouseleave', () => {
        if(video) {
            video.pause();
            video.currentTime = 0;
            if(poster) poster.style.opacity = '1';
        }
    });
});

// Lightbox Logic
let currentGallery = [];
let currentIndex = 0;

function openLightbox(projectId) {
    const galleryEl = document.getElementById('gallery-' + projectId);
    if(!galleryEl) return;
    
    currentGallery = [];
    Array.from(galleryEl.children).forEach(el => {
        currentGallery.push({
            type: el.getAttribute('data-type'),
            src: el.getAttribute('src')
        });
    });
    
    if(currentGallery.length > 0) {
        currentIndex = 0;
        renderLightboxMedia();
        const lb = document.getElementById('projectLightbox');
        lb.classList.add('active');
        document.body.style.overflow = 'hidden'; 
    }
}

function closeLightbox() {
    const lb = document.getElementById('projectLightbox');
    lb.classList.remove('active');
    document.body.style.overflow = '';
    
    const container = document.getElementById('lightboxMediaContainer');
    container.innerHTML = '';
}

function renderLightboxMedia() {
    const container = document.getElementById('lightboxMediaContainer');
    const item = currentGallery[currentIndex];
    
    if(item.type === 'image') {
        container.innerHTML = <img src=" + item.src + " class="lightbox-item active">;
    } else if (item.type === 'video') {
        container.innerHTML = <video src=" + item.src + " class="lightbox-item active" controls autoplay playsinline style="max-height:85vh; width:auto; border-radius: 8px;"></video>;
    }
    
    // Add custom cursor styling to new elements if needed
    container.querySelectorAll('.lightbox-item').forEach(el => {
        
    });
}

function nextMedia() {
    if(currentGallery.length <= 1) return;
    currentIndex = (currentIndex + 1) % currentGallery.length;
    renderLightboxMedia();
}

function prevMedia() {
    if(currentGallery.length <= 1) return;
    currentIndex = (currentIndex - 1 + currentGallery.length) % currentGallery.length;
    renderLightboxMedia();
}
</script>

<!-- CTA Section -->
<section class="section-padding border-top border-light-subtle position-relative overflow-hidden">
    <div class="container text-center position-relative z-2">
        <h2 class="display-4 fw-bold text-white mb-4">Ready to <span style="color: var(--accent-orange);">Automate</span>?</h2>
        <p class="lead text-secondary mx-auto mb-5 max-w-700">Get in touch with Automatixes today. Our specialists will design a custom automation plan tailored to your tools and operational goals.</p>
        <a href="contact" class="btn-magnetic btn-magnetic-primary" data-cursor="magnetic">
            <span class="btn-magnetic-inner">Book Free Consultation <i class="fa-solid fa-calendar-check ms-1"></i></span>
        </a>
    </div>
</section>

<?php include 'footer.php'; ?>

