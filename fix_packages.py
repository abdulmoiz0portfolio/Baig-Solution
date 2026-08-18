import io
import re

for filename in ['index.php', 'index.html']:
    with io.open(filename, 'r', encoding='utf-8') as f:
        content = f.read()

    # 1. Extract the three cards
    # We can split by <!-- Package 1... -->, <!-- Package 2... -->, <!-- Package 3... -->
    
    parts = re.split(r'<!-- Package [123]:.*?-->', content)
    
    # parts[0] is everything before Package 1
    # parts[1] is Package 1 (AI Automation)
    # parts[2] is Package 2 (Website)
    # parts[3] is Package 3 (Commercial Products)
    # parts[4] is everything after Package 3 (there's only 3 packages, so parts has 4 elements)
    
    # Wait, re.split creates a list. Let's make sure we find them accurately.
    # Package 1 HTML:
    pkg1_match = re.search(r'<!-- Package 1: AI Automation -->(.*?)<!-- Package 2: Website -->', content, re.DOTALL)
    pkg2_match = re.search(r'<!-- Package 2: Website -->(.*?)<!-- Package 3: Commercial Products -->', content, re.DOTALL)
    pkg3_match = re.search(r'<!-- Package 3: Commercial Products -->(.*?)</div>\s*</div>\s*</section>', content, re.DOTALL)
    
    if pkg1_match and pkg2_match and pkg3_match:
        pkg1_html = pkg1_match.group(1)
        pkg2_html = pkg2_match.group(1)
        pkg3_html = pkg3_match.group(1)
        
        # We need to swap the styling. pkg1 is regular, pkg2 is popular.
        # But the user wants AI Automation to be Popular, and Website Build to be regular.
        # Instead of just swapping their HTML blocks, we should extract their inner content and swap them,
        # OR just swap their HTML and adjust the classes.
        
        # Actually, let's just rewrite the entire row html to be safe.
        
        new_row_html = '''
            <!-- Package 1: Website -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="card pricing-card h-100 bg-surface border-0 rounded-4 p-4 p-lg-5 position-relative text-center hover-lift d-flex flex-column" style="box-shadow: 0 10px 30px rgba(0,0,0,0.3); border: 1px solid rgba(255,255,255,0.05) !important;">
                    <div class="mb-4">
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
                        <a href="contact" class="btn btn-outline-light w-100 rounded-pill py-3 fw-bold">Build Your Site</a>
                    </div>
                </div>
            </div>

            <!-- Package 2: AI Automation (POPULAR) -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="card pricing-card scale-lg-up h-100 bg-surface rounded-4 p-4 p-lg-5 position-relative text-center d-flex flex-column" style="box-shadow: 0 15px 40px rgba(200, 224, 25, 0.1); border: 2px solid var(--accent-neon) !important;">
                    <div class="position-absolute top-0 start-50 translate-middle badge bg-accent-brand text-dark rounded-pill py-2 px-3 fw-bold shadow-sm" style="font-size: 0.8rem; letter-spacing: 1px;">POPULAR</div>
                    <div class="mb-4 mt-2">
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
                        <a href="contact" class="btn btn-accent-brand w-100 rounded-pill py-3 text-dark fw-extrabold shadow-sm hover-lift">Get Started</a>
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
                        <h3 class="h4 fw-bold text-white mb-2">Digitized Commercial Products</h3>
                        <p class="text-muted small">Digital enhancement & cinematic edits</p>
                    </div>
                    <hr class="border-secondary opacity-25 mb-4">
                    <ul class="list-unstyled text-white-50 mb-5 text-start" style="font-size: 0.95rem;">
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-accent-brand mt-1 me-3 flex-shrink-0"></i> <span>AI Product Photo Enhancement</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-accent-brand mt-1 me-3 flex-shrink-0"></i> <span>Background Removal & Replacement</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-accent-brand mt-1 me-3 flex-shrink-0"></i> <span>Professional Color Grading & Retouching</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-accent-brand mt-1 me-3 flex-shrink-0"></i> <span>Social Media Ready Formats</span></li>
                    </ul>
                    <div class="mt-auto pt-4">
                        <a href="contact" class="btn btn-outline-light w-100 rounded-pill py-3 fw-bold">Get Started</a>
                    </div>
                </div>
            </div>'''
        
        # Replace the entire row contents
        pattern = r'<!-- Package 1: AI Automation -->.*?<!-- Package 3: Commercial Products -->.*?</div>\s*</div>\s*(?=</div>\s*</div>\s*</section>)'
        new_content = re.sub(pattern, new_row_html, content, flags=re.DOTALL)
        
        with io.open(filename, 'w', encoding='utf-8') as f:
            f.write(new_content)
