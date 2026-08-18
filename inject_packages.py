import io

packages_html = '''
<!-- Packages Section Start -->
<section class="packages-area bg-dark pt-5 pb-5 position-relative overflow-hidden">
    <div class="container position-relative z-1">
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".1s">
            <span class="badge bg-brand-translucent text-accent-brand mb-3 font-monospace px-3 py-2 border border-brand-50">PACKAGES</span>
            <h2 class="display-5 fw-bold text-white mb-3">Our Core Packages</h2>
            <div class="title-underline mx-auto mb-4"></div>
            <p class="text-white-50 mx-auto max-w-700">Choose the right automation or development package tailored to scale your business and eliminate bottlenecks.</p>
        </div>

        <div class="row g-4 justify-content-center align-items-stretch">
            
            <!-- Package 1: AI Automation -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="card pricing-card h-100 bg-surface border-0 rounded-4 p-4 p-lg-5 position-relative text-center hover-lift d-flex flex-column" style="box-shadow: 0 10px 30px rgba(0,0,0,0.3); border: 1px solid rgba(255,255,255,0.05) !important;">
                    <div class="mb-4">
                        <div class="bg-brand-translucent text-accent-brand rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 60px; height: 60px; font-size: 24px;">
                            <i class="fa-solid fa-robot"></i>
                        </div>
                        <h3 class="h4 fw-bold text-white mb-2">AI Automation</h3>
                        <p class="text-muted small">Intelligent agents & workflows</p>
                    </div>
                    <hr class="border-secondary opacity-25 mb-4">
                    <ul class="list-unstyled text-white-50 mb-5 text-start" style="font-size: 0.95rem;">
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-accent-brand mt-1 me-3 flex-shrink-0"></i> <span>Custom AI Voice & Chat Agents</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-accent-brand mt-1 me-3 flex-shrink-0"></i> <span>N8N & Make.com Workflows</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-accent-brand mt-1 me-3 flex-shrink-0"></i> <span>CRM Data Sync & Triggers</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-accent-brand mt-1 me-3 flex-shrink-0"></i> <span>Ongoing Strategy & Support</span></li>
                    </ul>
                    <div class="mt-auto pt-4">
                        <a href="contact" class="btn btn-outline-light w-100 rounded-pill py-3 fw-bold">Get Started</a>
                    </div>
                </div>
            </div>

            <!-- Package 2: Website -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="card pricing-card h-100 bg-surface rounded-4 p-4 p-lg-5 position-relative text-center d-flex flex-column" style="box-shadow: 0 15px 40px rgba(200, 224, 25, 0.1); border: 2px solid var(--accent-neon) !important; transform: scale(1.05); z-index: 2;">
                    <div class="position-absolute top-0 start-50 translate-middle badge bg-accent-brand text-dark rounded-pill py-2 px-3 fw-bold shadow-sm" style="font-size: 0.8rem; letter-spacing: 1px;">POPULAR</div>
                    <div class="mb-4 mt-2">
                        <div class="bg-brand-translucent text-accent-brand rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 60px; height: 60px; font-size: 24px;">
                            <i class="fa-solid fa-laptop-code"></i>
                        </div>
                        <h3 class="h4 fw-bold text-white mb-2">Website Build</h3>
                        <p class="text-muted small">High-converting digital presence</p>
                    </div>
                    <hr class="border-secondary opacity-25 mb-4">
                    <ul class="list-unstyled text-white-50 mb-5 text-start" style="font-size: 0.95rem;">
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-accent-brand mt-1 me-3 flex-shrink-0"></i> <span>Custom UI/UX Design</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-accent-brand mt-1 me-3 flex-shrink-0"></i> <span>Responsive & Mobile Ready</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-accent-brand mt-1 me-3 flex-shrink-0"></i> <span>SEO Optimized Structure</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-accent-brand mt-1 me-3 flex-shrink-0"></i> <span>High Speed & Performance</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-accent-brand mt-1 me-3 flex-shrink-0"></i> <span>Content Management (CMS)</span></li>
                    </ul>
                    <div class="mt-auto pt-4">
                        <a href="contact" class="btn btn-accent-brand w-100 rounded-pill py-3 text-dark fw-extrabold shadow-sm hover-lift">Build Your Site</a>
                    </div>
                </div>
            </div>

            <!-- Package 3: Commercial Products -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                <div class="card pricing-card h-100 bg-surface border-0 rounded-4 p-4 p-lg-5 position-relative text-center hover-lift d-flex flex-column" style="box-shadow: 0 10px 30px rgba(0,0,0,0.3); border: 1px solid rgba(255,255,255,0.05) !important;">
                    <div class="mb-4">
                        <div class="bg-brand-translucent text-accent-brand rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 60px; height: 60px; font-size: 24px;">
                            <i class="fa-solid fa-video"></i>
                        </div>
                        <h3 class="h4 fw-bold text-white mb-2">Commercial Products</h3>
                        <p class="text-muted small">Professional shoots & cinematic edits</p>
                    </div>
                    <hr class="border-secondary opacity-25 mb-4">
                    <ul class="list-unstyled text-white-50 mb-5 text-start" style="font-size: 0.95rem;">
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-accent-brand mt-1 me-3 flex-shrink-0"></i> <span>Professional Product Shoots</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-accent-brand mt-1 me-3 flex-shrink-0"></i> <span>Cinematic Commercial Edits</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-accent-brand mt-1 me-3 flex-shrink-0"></i> <span>High-Res Digital Assets</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-accent-brand mt-1 me-3 flex-shrink-0"></i> <span>Social Media Ready Formats</span></li>
                    </ul>
                    <div class="mt-auto pt-4">
                        <a href="contact" class="btn btn-outline-light w-100 rounded-pill py-3 fw-bold">Book a Shoot</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Packages Section End -->

'''

for filename in ['index.php', 'index.html']:
    with io.open(filename, 'r', encoding='utf-8') as f:
        content = f.read()
    
    if '<!-- Packages Section Start -->' not in content:
        content = content.replace('<!-- CTA Section Start -->', packages_html + '<!-- CTA Section Start -->')
        
        with io.open(filename, 'w', encoding='utf-8') as f:
            f.write(content)
