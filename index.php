<?php $page_key = 'index'; include 'header.php'; ?>

<!-- Hero Section Start -->
<section class="hero-section position-relative d-flex align-items-center justify-content-center text-center" style="min-height: 100vh; overflow: hidden; padding-top: 100px;">
    <!-- Abstract Glowing Orbs (Automatixes Style) -->
    <div class="position-absolute rounded-circle" style="background: radial-gradient(circle, rgba(200, 224, 25,0.35) 0%, rgba(0,0,0,0) 70%); width: 700px; height: 700px; top: -100px; left: -150px; filter: blur(80px); z-index: 0; pointer-events: none;"></div>
    <div class="position-absolute rounded-circle" style="background: radial-gradient(circle, rgba(168,85,247,0.2) 0%, rgba(0,0,0,0) 70%); width: 600px; height: 600px; bottom: -50px; right: -100px; filter: blur(80px); z-index: 0; pointer-events: none;"></div>
    
    <!-- Floating Automation Workflow Nodes (Left) -->
    <style>
        @keyframes heroFloat {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }
    </style>
    <!-- Floating Automation Workflow Nodes (Left - n8n Workflow) -->
    <div class="position-absolute d-none d-lg-block" style="top: 25%; left: 8%; z-index: 0; opacity: 0.3; pointer-events: none; animation: heroFloat 6s ease-in-out infinite;">
        <svg width="240" height="280" viewBox="0 0 240 280" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
            <defs>
                <!-- Canvas Grid Pattern -->
                <pattern id="n8nCanvasGrid" x="0" y="0" width="16" height="16" patternUnits="userSpaceOnUse">
                    <circle cx="8" cy="8" r="0.75" fill="#ffffff" fill-opacity="0.15"/>
                </pattern>
                
                <!-- Connection Gradients -->
                <linearGradient id="n8nGrad1" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="#C8E019" stop-opacity="0.9"/>
                    <stop offset="100%" stop-color="#ffffff" stop-opacity="0.7"/>
                </linearGradient>
                <linearGradient id="n8nGrad2" x1="0%" y1="0%" x2="0%" y2="100%">
                    <stop offset="0%" stop-color="#ffffff" stop-opacity="0.7"/>
                    <stop offset="100%" stop-color="#C8E019" stop-opacity="0.9"/>
                </linearGradient>
                <linearGradient id="n8nGrad3" x1="100%" y1="0%" x2="0%" y2="100%">
                    <stop offset="0%" stop-color="#ffffff" stop-opacity="0.7"/>
                    <stop offset="100%" stop-color="#94a3b8" stop-opacity="0.5"/>
                </linearGradient>
            </defs>

            <!-- Background Canvas Texture -->
            <rect width="240" height="280" fill="url(#n8nCanvasGrid)" rx="16"/>

            <!-- Connection Paths -->
            <!-- Path 1: Trigger to AI Engine -->
            <path d="M68 44 C118 44, 102 110, 152 110" stroke="url(#n8nGrad1)" stroke-width="1.75" stroke-linecap="round" fill="none"/>
            <!-- Path 2: AI Engine to Action Sync (Vertical Primary) -->
            <path d="M176 134 L176 208" stroke="url(#n8nGrad2)" stroke-width="1.75" stroke-linecap="round" fill="none"/>
            <!-- Path 3: AI Engine to Dispatch/Notification (Branch Secondary) -->
            <path d="M152 122 C100 122, 120 198, 68 198" stroke="url(#n8nGrad3)" stroke-width="1.75" stroke-dasharray="4 4" stroke-linecap="round" fill="none"/>

            <!-- Data Packet Pulse Indicators -->
            <circle cx="110" cy="77" r="2.5" fill="#C8E019"/>
            <circle cx="176" cy="171" r="2.5" fill="#C8E019"/>
            <circle cx="108" cy="160" r="2" fill="#ffffff" fill-opacity="0.8"/>

            <!-- Node 1: Webhook Trigger (Top Left) -->
            <g id="node-trigger">
                <rect x="20" y="20" width="48" height="48" rx="12" fill="#ffffff" fill-opacity="0.04" stroke="#C8E019" stroke-width="1.5"/>
                <!-- Lightning Trigger Glyph -->
                <path d="M45 32 L37 44 L43 44 L41 56 L51 42 L45 42 Z" fill="#C8E019"/>
                <!-- Status Indicator -->
                <circle cx="62" cy="24" r="4.5" fill="#111827" stroke="#C8E019" stroke-width="1.2"/>
                <path d="M60 24 L61.5 25.5 L64.5 22.5" fill="none" stroke="#C8E019" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                <!-- Output Port -->
                <circle cx="68" cy="44" r="3" fill="#C8E019" stroke="#111827" stroke-width="1"/>
            </g>

            <!-- Node 2: AI Processor / Router (Center Right) -->
            <g id="node-router">
                <rect x="152" y="86" width="48" height="48" rx="12" fill="#ffffff" fill-opacity="0.04" stroke="#ffffff" stroke-opacity="0.6" stroke-width="1.5"/>
                <!-- AI Sparkle Icon -->
                <path d="M176 99 C176 105 181 110 187 110 C181 110 176 115 176 121 C176 115 171 110 165 110 C171 110 176 105 176 99 Z" fill="#C8E019"/>
                <path d="M185 94 C185 96.5 187.5 99 190 99 C187.5 99 185 101.5 185 104 C185 101.5 182.5 99 180 99 C182.5 99 185 96.5 185 94 Z" fill="#ffffff" fill-opacity="0.8"/>
                <!-- Input Port -->
                <circle cx="152" cy="110" r="3" fill="#ffffff" stroke="#111827" stroke-width="1"/>
                <!-- Output Ports -->
                <circle cx="176" cy="134" r="3" fill="#C8E019" stroke="#111827" stroke-width="1"/>
                <circle cx="152" cy="122" r="3" fill="#94a3b8" stroke="#111827" stroke-width="1"/>
            </g>

            <!-- Node 3: Database / CRM Action (Bottom Right) -->
            <g id="node-database">
                <rect x="152" y="208" width="48" height="48" rx="12" fill="#ffffff" fill-opacity="0.04" stroke="#C8E019" stroke-width="1.5"/>
                <!-- Database / Storage Icon -->
                <ellipse cx="176" cy="223" rx="10" ry="3.5" fill="none" stroke="#C8E019" stroke-width="1.5"/>
                <path d="M166 228 C166 231 170.5 232.5 176 232.5 C181.5 232.5 186 231 186 228" fill="none" stroke="#C8E019" stroke-width="1.5"/>
                <path d="M166 234 C166 237 170.5 238.5 176 238.5 C181.5 238.5 186 237 186 234" fill="none" stroke="#C8E019" stroke-width="1.5"/>
                <line x1="166" y1="223" x2="166" y2="234" stroke="#C8E019" stroke-width="1.5"/>
                <line x1="186" y1="223" x2="186" y2="234" stroke="#C8E019" stroke-width="1.5"/>
                <!-- Input Port -->
                <circle cx="176" cy="208" r="3" fill="#C8E019" stroke="#111827" stroke-width="1"/>
            </g>

            <!-- Node 4: Dispatch / Notification (Bottom Left) -->
            <g id="node-notification">
                <rect x="20" y="174" width="48" height="48" rx="12" fill="#ffffff" fill-opacity="0.04" stroke="#ffffff" stroke-opacity="0.6" stroke-width="1.5"/>
                <!-- Paper Plane / Send Icon -->
                <path d="M35 199 L53 189 L45 207 L42 200 Z" fill="none" stroke="#ffffff" stroke-width="1.5" stroke-linejoin="round" stroke-linecap="round"/>
                <line x1="53" y1="189" x2="42" y2="200" stroke="#C8E019" stroke-width="1.5" stroke-linecap="round"/>
                <!-- Input Port -->
                <circle cx="68" cy="198" r="3" fill="#ffffff" stroke="#111827" stroke-width="1"/>
            </g>
        </svg>
    </div>
    
    <!-- Floating Automation Workflow Nodes (Right - CRM / Make Stack) -->
    <div class="position-absolute d-none d-lg-block" style="bottom: 15%; right: 10%; z-index: 0; opacity: 0.3; pointer-events: none; animation: heroFloat 8s ease-in-out infinite reverse;">
        <svg width="260" height="260" viewBox="0 0 260 260" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
            <defs>
                <!-- Flow Gradients -->
                <linearGradient id="makeFlow1" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="#C8E019" stop-opacity="0.9"/>
                    <stop offset="100%" stop-color="#ffffff" stop-opacity="0.7"/>
                </linearGradient>
                <linearGradient id="makeFlow2" x1="0%" y1="100%" x2="100%" y2="0%">
                    <stop offset="0%" stop-color="#ffffff" stop-opacity="0.7"/>
                    <stop offset="100%" stop-color="#C8E019" stop-opacity="0.9"/>
                </linearGradient>
                <linearGradient id="makeFlow3" x1="0%" y1="0%" x2="100%" y2="50%">
                    <stop offset="0%" stop-color="#ffffff" stop-opacity="0.8"/>
                    <stop offset="100%" stop-color="#C8E019" stop-opacity="0.8"/>
                </linearGradient>
                <linearGradient id="makeFlow4" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="#ffffff" stop-opacity="0.8"/>
                    <stop offset="100%" stop-color="#94a3b8" stop-opacity="0.6"/>
                </linearGradient>
                <linearGradient id="makeFlow5" x1="100%" y1="0%" x2="0%" y2="100%">
                    <stop offset="0%" stop-color="#C8E019" stop-opacity="0.8"/>
                    <stop offset="100%" stop-color="#94a3b8" stop-opacity="0.5"/>
                </linearGradient>
            </defs>

            <!-- Background Orbital Guide Rings (Make.com Canvas Texture) -->
            <circle cx="130" cy="130" r="55" stroke="#ffffff" stroke-opacity="0.08" stroke-dasharray="3 5" fill="none"/>
            <circle cx="130" cy="130" r="95" stroke="#C8E019" stroke-opacity="0.08" stroke-dasharray="4 6" fill="none"/>
            <circle cx="130" cy="130" r="120" stroke="#ffffff" stroke-opacity="0.04" stroke-dasharray="6 8" fill="none"/>

            <!-- Connection Conduits -->
            <!-- Conduit 1: Trigger -> Hub -->
            <path d="M63 90 C90 90, 95 130, 105 130" stroke="url(#makeFlow1)" stroke-width="1.75" stroke-linecap="round" fill="none"/>
            <!-- Conduit 2: Hub -> CRM Target -->
            <path d="M151 118 C170 100, 185 60, 197 60" stroke="url(#makeFlow2)" stroke-width="1.75" stroke-linecap="round" fill="none"/>
            <!-- Conduit 3: Hub -> Database Sync -->
            <path d="M155 135 C175 135, 185 155, 209 155" stroke="url(#makeFlow3)" stroke-width="1.75" stroke-linecap="round" fill="none"/>
            <!-- Conduit 4: Hub -> Instant Messaging -->
            <path d="M145 151 C155 175, 162 195, 173 214" stroke="url(#makeFlow4)" stroke-width="1.75" stroke-linecap="round" fill="none"/>
            <!-- Conduit 5: Hub -> AI Lead Scoring (Secondary Branch) -->
            <path d="M112 148 C95 170, 88 185, 77 204" stroke="url(#makeFlow5)" stroke-width="1.5" stroke-dasharray="3 3" stroke-linecap="round" fill="none"/>

            <!-- Filter Badge (Between Trigger and Hub) -->
            <g id="filter-badge">
                <circle cx="84" cy="110" r="6.5" fill="#111827" stroke="#C8E019" stroke-width="1.2"/>
                <path d="M81.5 107.5 L86.5 107.5 L84.5 110 L84.5 113 L83.5 113 L83.5 110 Z" fill="#C8E019"/>
            </g>

            <!-- Data Pulse Packets -->
            <circle cx="73" cy="98" r="2" fill="#ffffff"/>
            <circle cx="178" cy="84" r="2.5" fill="#C8E019"/>
            <circle cx="184" cy="147" r="2" fill="#ffffff"/>
            <circle cx="156" cy="178" r="2.5" fill="#C8E019"/>
            <circle cx="98" cy="172" r="2" fill="#C8E019"/>

            <!-- Module 1: Webhook / Lead Ingest Trigger (Top-Left) -->
            <g id="module-trigger">
                <circle cx="45" cy="90" r="23" stroke="#C8E019" stroke-opacity="0.3" stroke-width="1.25" stroke-dasharray="3 3" fill="none"/>
                <circle cx="45" cy="90" r="18" fill="#ffffff" fill-opacity="0.05" stroke="#C8E019" stroke-width="1.5"/>
                <!-- Lightning Bolt Ingest Glyph -->
                <path d="M47 81 L41 89 L46 89 L43 99 L51 88 L46 88 Z" fill="#C8E019"/>
                <!-- Connection Output Port -->
                <circle cx="63" cy="90" r="2.5" fill="#C8E019" stroke="#111827" stroke-width="0.75"/>
            </g>

            <!-- Module 2: Central Make Router / Orchestrator Hub (Center) -->
            <g id="module-router-hub">
                <circle cx="130" cy="130" r="32" stroke="#C8E019" stroke-opacity="0.2" stroke-width="1.5" stroke-dasharray="2 3" fill="none"/>
                <circle cx="130" cy="130" r="25" fill="#ffffff" fill-opacity="0.06" stroke="#ffffff" stroke-width="1.75"/>
                <circle cx="130" cy="130" r="15" fill="#C8E019" fill-opacity="0.12" stroke="#C8E019" stroke-width="1.25"/>
                <!-- Make Router Split Glyph -->
                <circle cx="130" cy="130" r="3.5" fill="#C8E019"/>
                <path d="M130 126.5 L130 120 M132.5 131.5 L138 135 M127.5 131.5 L122 135" stroke="#C8E019" stroke-width="1.5" stroke-linecap="round"/>
                <circle cx="130" cy="119" r="1.5" fill="#ffffff"/>
                <circle cx="139" cy="136" r="1.5" fill="#ffffff"/>
                <circle cx="121" cy="136" r="1.5" fill="#ffffff"/>
                <!-- Hub Connection Ports -->
                <circle cx="105" cy="130" r="2.5" fill="#C8E019"/>
                <circle cx="151" cy="118" r="2.5" fill="#C8E019"/>
                <circle cx="155" cy="135" r="2.5" fill="#ffffff"/>
                <circle cx="145" cy="151" r="2.5" fill="#ffffff"/>
                <circle cx="112" cy="148" r="2.5" fill="#94a3b8"/>
            </g>

            <!-- Module 3: CRM Lead Profile Target (Top-Right) -->
            <g id="module-crm-lead">
                <circle cx="215" cy="60" r="22" stroke="#ffffff" stroke-opacity="0.3" stroke-width="1.25" stroke-dasharray="3 3" fill="none"/>
                <circle cx="215" cy="60" r="18" fill="#ffffff" fill-opacity="0.05" stroke="#ffffff" stroke-width="1.5"/>
                <!-- CRM User Avatar Glyph -->
                <circle cx="215" cy="55" r="3.5" stroke="#C8E019" stroke-width="1.3" fill="none"/>
                <path d="M208 67 C208 63 211 61 215 61 C219 61 222 63 222 67" stroke="#C8E019" stroke-width="1.3" fill="none" stroke-linecap="round"/>
                <circle cx="221" cy="53" r="2" fill="#C8E019"/>
                <!-- Input Port -->
                <circle cx="197" cy="60" r="2.5" fill="#ffffff" stroke="#111827" stroke-width="0.75"/>
            </g>

            <!-- Module 4: Cloud Database / Store Sync (Middle-Right) -->
            <g id="module-database-sync">
                <circle cx="225" cy="155" r="20" stroke="#C8E019" stroke-opacity="0.3" stroke-width="1.25" fill="none"/>
                <circle cx="225" cy="155" r="16" fill="#ffffff" fill-opacity="0.05" stroke="#C8E019" stroke-width="1.5"/>
                <!-- Database Cylinder Stack Glyph -->
                <ellipse cx="225" cy="148" rx="6.5" ry="2.5" fill="none" stroke="#ffffff" stroke-width="1.2"/>
                <path d="M218.5 148 L218.5 158 C218.5 160 221.5 161.5 225 161.5 C228.5 161.5 231.5 160 231.5 158 L231.5 148" fill="none" stroke="#ffffff" stroke-width="1.2"/>
                <path d="M218.5 153 C218.5 155 221.5 156.5 225 156.5 C228.5 156.5 231.5 155 231.5 153" fill="none" stroke="#C8E019" stroke-width="1.2"/>
                <!-- Input Port -->
                <circle cx="209" cy="155" r="2.5" fill="#C8E019" stroke="#111827" stroke-width="0.75"/>
            </g>

            <!-- Module 5: Instant Communications / Slack / SMS (Bottom-Right) -->
            <g id="module-messaging">
                <circle cx="185" cy="225" r="22" stroke="#ffffff" stroke-opacity="0.3" stroke-width="1.25" stroke-dasharray="4 3" fill="none"/>
                <circle cx="185" cy="225" r="17" fill="#ffffff" fill-opacity="0.05" stroke="#ffffff" stroke-width="1.5"/>
                <!-- Message Bubble Notification Glyph -->
                <path d="M178 221 C178 217.5 181 215 185 215 C189 215 192 217.5 192 221 C192 224 189 226.5 185 226.5 C184 226.5 183 226.3 182 226 L179 228 L179.5 225 C178.5 224 178 222.5 178 221 Z" fill="none" stroke="#C8E019" stroke-width="1.2" stroke-linejoin="round"/>
                <line x1="182" y1="220" x2="188" y2="220" stroke="#ffffff" stroke-width="1" stroke-linecap="round"/>
                <!-- Input Port -->
                <circle cx="173" cy="214" r="2.5" fill="#ffffff" stroke="#111827" stroke-width="0.75"/>
            </g>

            <!-- Module 6: AI Lead Scoring / Analytics (Bottom-Left) -->
            <g id="module-ai-scoring">
                <circle cx="65" cy="215" r="20" stroke="#C8E019" stroke-opacity="0.3" stroke-width="1.25" stroke-dasharray="2 3" fill="none"/>
                <circle cx="65" cy="215" r="16" fill="#ffffff" fill-opacity="0.05" stroke="#C8E019" stroke-width="1.5"/>
                <!-- Bar Chart & AI Spark Glyph -->
                <path d="M59 222 L59 217 M63 222 L63 213 M67 222 L67 215 M71 222 L71 210" stroke="#C8E019" stroke-width="1.3" stroke-linecap="round"/>
                <path d="M58 209 C60 209 61 207 61 205 C61 207 62 209 64 209 C62 209 61 211 61 213 C61 211 60 209 58 209 Z" fill="#ffffff"/>
                <!-- Input Port -->
                <circle cx="77" cy="204" r="2.5" fill="#C8E019" stroke="#111827" stroke-width="0.75"/>
            </g>
        </svg>
    </div>
    
    <div class="container position-relative z-1 hero-content py-5" style="color: #ffffff;">
        <span class="badge rounded-pill border border-secondary text-light mb-4 px-4 py-2" style="background: rgba(255,255,255,0.03); letter-spacing: 2px; font-size: 0.75rem; text-transform: uppercase;">
            <span style="color: #C8E019;" class="me-2">🚀</span> DIGITAL AGENCY FOR AMBITIOUS BRANDS
        </span>
        
        <h1 class="display-3 fw-bold mb-4" style="line-height: 1.15; letter-spacing: -1.5px; color: #ffffff;">
            We Build Systems That Work <br>
            <span style="color: var(--accent-neon);">While You Sleep.</span>
        </h1>
        
        <p class="lead mx-auto mb-5" style="max-width: 650px; font-size: 1.15rem; color: #9ca3af;">
            Automatixes designs, builds, and scales premium AI agents, automated workflows, and custom web applications for startups, SMBs, and enterprise teams globally.
        </p>

        <div class="d-flex justify-content-center gap-3 flex-wrap wow fadeInUp" data-wow-delay=".4s">
            <a href="contact" class="btn text-white rounded-pill px-5 py-3 fw-semibold d-flex align-items-center" style="background: linear-gradient(135deg, #0D6171, #C8E019); border: none; box-shadow: 0 10px 25px rgba(200, 224, 25,0.4); transition: transform 0.2s;">
                Start Your Project <i class="fa-solid fa-arrow-right ms-2"></i>
            </a>
            <a href="#portfolio-section" class="btn rounded-pill px-5 py-3 fw-semibold border" style="background: rgba(255,255,255,0.05); color: #ffffff; border-color: rgba(255,255,255,0.1); transition: background 0.2s;">
                View Our Work
            </a>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- About Section Start -->
<section id="about-section" class="about-section fix section-padding bg-warm-peach">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5">
                <div class="about-image-wrapper wow fadeInLeft" data-wow-delay=".3s">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=600&q=80" alt="Team planning at Automatixes" loading="lazy" class="img-fluid rounded-4 shadow-sm border border-white border-4">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="about-content ps-lg-4">
                    <div class="section-title">
                        <div class="sub-title bg-color-2 wow fadeInUp mb-3">
                            <span>About Automatixes</span>
                        </div>
                        <h2 class="wow fadeInUp text-dark fw-extrabold display-5 mb-4" data-wow-delay=".3s">
                            Who We Are
                        </h2>
                    </div>
                    <p class="mt-3 wow fadeInUp text-secondary fs-5" data-wow-delay=".5s">
                        Automatixes is an AI automation agency that helps businesses automate lead follow-up, CRM syncing, and customer support using tools like n8n, Make, and GoHighLevel. We build custom AI agents and workflow automations for small and mid-sized businesses.
                    </p>
                    
                    <h5 class="fw-bold text-dark mt-4 mb-3 wow fadeInUp" data-wow-delay=".3s">Who We Serve:</h5>
                    <div class="list-items wow fadeInUp" data-wow-delay=".4s">
                        <ul class="list-unstyled">
                            <li class="mb-2 d-flex align-items-start fs-6 text-secondary">
                                <i class="fa-solid fa-house-chimney text-accent-brand me-3 mt-1"></i>
                                <span><strong>Real Estate:</strong> Automated SMS replies, lead dispatch, and calendar booking.</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start fs-6 text-secondary">
                                <i class="fa-solid fa-graduation-cap text-accent-brand me-3 mt-1"></i>
                                <span><strong>Coaches & Consultants:</strong> Automated onboarding, email nurture, and CRM updates.</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start fs-6 text-secondary">
                                <i class="fa-solid fa-cart-shopping text-accent-brand me-3 mt-1"></i>
                                <span><strong>E-Commerce:</strong> Inventory sync, abandoned cart tracking, and orders notification.</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start fs-6 text-secondary">
                                <i class="fa-solid fa-wrench text-accent-brand me-3 mt-1"></i>
                                <span><strong>Service Businesses:</strong> Auto-invoicing, feedback loops, and internal team alerts.</span>
                            </li>
                        </ul>
                    </div>

                    <div class="main-button mt-4 wow fadeInUp" data-wow-delay=".5s">
                        <a href="about" class="btn btn-brand">
                            <span>Meet the Team</span>
                            <span class="arrow-btn"><i class="fa-solid fa-arrow-up-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Toss Away Physics Section Start -->
<section class="section toss-away" style="position: relative; overflow: hidden; padding: 0; background: #fdfdfd;">
    <div class="container toss-away-container" style="position: absolute; top: 80px; left: 50%; transform: translateX(-50%); z-index: 99; pointer-events: none; width: 100%;">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="section__header text-center" style="margin-bottom: 0;">
                    <h2 class="title title-anim toss-away-title" style="color: #222; font-size: 55px; font-weight: 800; line-height: 1.1; letter-spacing: -1px;">
                        SAY GOODBYE TO THESE<br><span style="color: #444;">BUSINESS HEADACHES</span>
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div id="physics-container" style="width: 100%; height: 600px; position: relative; cursor: grab; z-index: 1; overflow: hidden;">
        <!-- Matter.js Canvas Injected Here -->
    </div>
</section>
<!-- Toss Away Physics Section End -->

<!-- Services Section Start -->
<section id="services-section" class="section-padding bg-light-gray text-dark">
    <div class="container">
        <div class="text-center mb-5 max-w-700 mx-auto">
            <span class="badge rounded-pill border border-secondary text-light mb-3 px-3 py-2" style="background: rgba(255,255,255,0.05); letter-spacing: 1px;">SERVICES WE PROVIDE</span>
            <h2 class="display-5 fw-extrabold mb-3 typewriter-anim">Our Core Offerings</h2>
            <p class="text-secondary fs-5">We combine strategy, design, and automation to scale your business.</p>
        </div>
        
        <div class="row g-4 justify-content-center">
                   <!-- Primary Service: AI Agents & Automations (Combined) -->
            <div class="col-lg-10 col-md-12">
                <div class="card-service-item wow fadeInUp" data-wow-delay=".2s">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-6">
                            <div class="thumb rounded-4 overflow-hidden shadow-sm" style="height: 100%; min-height: 320px;">
                                <img src="assets/img/services/ai_agents.jpg" alt="AI Automated Solutions" class="w-100 h-100" style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="content p-4 p-lg-5">
                                <div class="d-flex align-items-center gap-2 mb-3">
                                    <i class="fa-solid fa-robot" style="font-size: 1.4rem; color: var(--accent-neon);"></i>
                                    <i class="fa-solid fa-plus" style="font-size: 0.8rem; color: var(--text-muted);"></i>
                                    <i class="fa-solid fa-gears" style="font-size: 1.4rem; color: var(--accent-neon);"></i>
                                </div>
                                <h3><a href="ai-automated-solutions" class="text-dark text-decoration-none">AI Automated Solutions</a></h3>
                                <p class="text-muted mb-2">Smart digital agents that automate customer support, qualify leads, and execute tasks 24/7 — combined with rule-based workflows that sync your CRM, pipelines, and communication tools seamlessly.</p>
                                <ul class="list-unstyled text-muted small mb-3" style="line-height: 2;">
                                    <li><i class="fa-solid fa-check me-2" style="color: var(--accent-neon);"></i>Natural language understanding & dynamic reasoning</li>
                                    <li><i class="fa-solid fa-check me-2" style="color: var(--accent-neon);"></i>API, Webhook & CRM integrations</li>
                                    <li><i class="fa-solid fa-check me-2" style="color: var(--accent-neon);"></i>Custom trained on your knowledge base</li>
                                </ul>
                                <p class="text-accent-brand small fw-semibold mt-2 mb-3" style="font-size: 13px;"><i class="fa-solid fa-circle-nodes me-1"></i> n8n, Make, GoHighLevel, Zapier & custom APIs</p>
                                <a href="ai-automated-solutions" class="icon-arrow d-inline-flex align-items-center justify-content-center" aria-label="AI Automated Solutions"><svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg></a>
                            </div>
                        </div>
                    </div>

        <!-- Additional Offerings Separator -->
        <div class="text-center my-5 pt-3 wow fadeInUp" data-wow-delay=".5s">
            <h4 class="text-white fw-bold font-monospace text-uppercase" style="font-size: 14px; letter-spacing: 2px;">Additional Services</h4>
            <div class="mx-auto bg-secondary bg-opacity-25 mt-2" style="width: 60px; height: 2px;"></div>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- Row 2: Secondary Services -->
            <div class="col-lg-5 col-md-6">
                <div class="card-service-item wow fadeInUp" data-wow-delay=".6s">
                    <div class="thumb mb-4 rounded-4 overflow-hidden shadow-sm">
                        <img src="assets/img/services/web_development.jpg" alt="Web & App Development" class="img-fluid w-100" style="aspect-ratio: 4/3; object-fit: cover;">
                    </div>
                    <div class="content">
                        <h3><a href="website-development" class="text-dark text-decoration-none">Web & App Development</a></h3>
                        <p class="text-muted">High performance, responsive, secure web platforms and fluid mobile apps built using modern technologies.</p>
                        <a href="website-development" class="icon-arrow mt-3 d-inline-flex align-items-center justify-content-center" aria-label="Web & App Development"><svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg></a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-5 col-md-6">
                <div class="card-service-item wow fadeInUp" data-wow-delay=".8s">
                    <div class="thumb mb-4 rounded-4 overflow-hidden shadow-sm">
                        <img src="assets/img/services/product_shoot.jpg" alt="Product Shoot Photography" class="img-fluid w-100" style="aspect-ratio: 4/3; object-fit: cover;">
                    </div>
                    <div class="content">
                        <h3><a href="product-shoot" class="text-dark text-decoration-none">Product Shoot</a></h3>
                        <p class="text-muted">High-end commercial product photography featuring studio lighting and custom setups to showcase your products.</p>
                        <a href="product-shoot" class="icon-arrow mt-3 d-inline-flex align-items-center justify-content-center" aria-label="Product Shoot Photography"><svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- AI Comparison Section Start -->
<section class="py-5 bg-dark text-white border-top border-light-subtle">
    <div class="container max-w-1000">
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".1s">
            <span class="badge rounded-pill border border-secondary text-light mb-3 px-3 py-2" style="background: rgba(255,255,255,0.05); letter-spacing: 1px;">CHOOSE YOUR SOLUTION</span>
            <h2 class="display-6 fw-extrabold mb-3 typewriter-anim">AI Agents vs AI Automations</h2>
            <p class="text-white-50 fs-5 mx-auto max-w-700">Not sure which service fits your business? Here is the core difference.</p>
        </div>

        <div class="row g-4 align-items-stretch">
            <!-- AI Agents Column -->
            <div class="col-md-6 wow fadeInLeft" data-wow-delay=".2s">
                <div class="p-4 p-md-5 h-100 rounded-4 d-flex flex-column" style="background: linear-gradient(145deg, #0B4550, #0B4550); border: 1px solid rgba(255,255,255,0.05); box-shadow: 0 15px 35px rgba(0,0,0,0.3);">
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-brand-translucent text-accent-brand rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0" style="width: 56px; height: 56px; font-size: 24px;">
                            <i class="fa-solid fa-robot"></i>
                        </div>
                        <h3 class="h4 fw-bold mb-0 text-white">Autonomous AI Agents</h3>
                    </div>
                    <p class="text-accent-brand fw-bold mb-3 small text-uppercase font-monospace" style="letter-spacing: 1.5px;">The "Decision Makers"</p>
                    <p class="text-white-50 mb-4 fs-6 lh-lg flex-grow-1">Intelligent virtual assistants that understand context and make dynamic decisions. Ideal for handling customer conversations, qualifying leads, and providing 24/7 support without strict rule paths.</p>
                    <ul class="list-unstyled text-white-50 mb-5">
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-success mt-1 me-3"></i> <span>Natural language understanding</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-success mt-1 me-3"></i> <span>Dynamic problem solving</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-success mt-1 me-3"></i> <span>Custom trained on your knowledge base</span></li>
                    </ul>
                    <a href="ai-automated-solutions" class="btn btn-outline-light btn-lg w-100 fw-bold border-2">Explore AI Agents <i class="fa-solid fa-arrow-right ms-2"></i></a>
                </div>
            </div>

            <!-- AI Automations Column -->
            <div class="col-md-6 wow fadeInRight" data-wow-delay=".3s">
                <div class="p-4 p-md-5 h-100 rounded-4 d-flex flex-column" style="background: linear-gradient(145deg, #0B4550, #0B4550); border: 1px solid rgba(255,255,255,0.05); box-shadow: 0 15px 35px rgba(0,0,0,0.3);">
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-brand-translucent text-accent-brand rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0" style="width: 56px; height: 56px; font-size: 24px;">
                            <i class="fa-solid fa-gears"></i>
                        </div>
                        <h3 class="h4 fw-bold mb-0 text-white">End-to-End Automations</h3>
                    </div>
                    <p class="text-accent-brand fw-bold mb-3 small text-uppercase font-monospace" style="letter-spacing: 1.5px;">The "Task Doers"</p>
                    <p class="text-white-50 mb-4 fs-6 lh-lg flex-grow-1">Strict, rule-based workflows that connect your existing software stack. Best for moving data, syncing CRMs, triggering emails, and eliminating manual copy-paste tasks instantly.</p>
                    <ul class="list-unstyled text-white-50 mb-5">
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-success mt-1 me-3"></i> <span>Rule-based exact execution</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-success mt-1 me-3"></i> <span>API & Webhook integrations</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-success mt-1 me-3"></i> <span>100% predictable outcomes</span></li>
                    </ul>
                    <a href="ai-automated-solutions" class="btn btn-outline-light btn-lg w-100 fw-bold border-2">Explore Automations <i class="fa-solid fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- AI Comparison Section End -->

<!-- Technologies We're Using Marquee Section Start -->
<section id="technologies-section" class="py-5 bg-light-gray text-dark border-top border-light-subtle overflow-hidden">
    <div class="container mb-4">
        <div class="d-flex align-items-center justify-content-center gap-3 max-w-700 mx-auto text-center">
            <div class="flex-grow-1 bg-secondary bg-opacity-25" style="height: 1px;"></div>
            <div class="d-flex align-items-center gap-2">
                <span class="rounded-circle bg-accent-brand d-inline-block" style="width: 8px; height: 8px;"></span>
                <h3 class="fw-extrabold text-dark m-0 px-2 fs-4 text-uppercase" style="letter-spacing: 1px;">Technologies We're Using</h3>
                <span class="rounded-circle bg-accent-brand d-inline-block" style="width: 8px; height: 8px;"></span>
            </div>
            <div class="flex-grow-1 bg-secondary bg-opacity-25" style="height: 1px;"></div>
        </div>
    </div>

    <div class="tech-marquee-wrapper">
        <div class="tech-marquee-track">

            <!-- Set 1 (8 Core AI Automation Stack Logos) -->
            <div class="tech-item">
                <div class="tech-item-icon">
                    <img src="https://www.google.com/s2/favicons?domain=n8n.io&sz=128" alt="n8n" style="width:40px; height:40px; object-fit:contain; border-radius:8px;">
                </div>
                <span class="tech-item-name">n8n</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon">
                    <img src="https://www.google.com/s2/favicons?domain=make.com&sz=128" alt="Make" style="width:40px; height:40px; object-fit:contain; border-radius:8px;">
                </div>
                <span class="tech-item-name">Make</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon">
                    <img src="https://www.google.com/s2/favicons?domain=gohighlevel.com&sz=128" alt="GoHighLevel" style="width:40px; height:40px; object-fit:contain; border-radius:8px;">
                </div>
                <span class="tech-item-name">GoHighLevel</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon">
                    <img src="https://www.google.com/s2/favicons?domain=zapier.com&sz=128" alt="Zapier" style="width:40px; height:40px; object-fit:contain; border-radius:8px;">
                </div>
                <span class="tech-item-name">Zapier</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon">
                    <img src="https://www.google.com/s2/favicons?domain=openai.com&sz=128" alt="OpenAI" style="width:40px; height:40px; object-fit:contain; border-radius:8px;">
                </div>
                <span class="tech-item-name">OpenAI</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon">
                    <img src="https://www.google.com/s2/favicons?domain=anthropic.com&sz=128" alt="Claude" style="width:40px; height:40px; object-fit:contain; border-radius:8px;">
                </div>
                <span class="tech-item-name">Claude</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon">
                    <img src="https://www.google.com/s2/favicons?domain=whatsapp.com&sz=128" alt="WhatsApp API" style="width:40px; height:40px; object-fit:contain; border-radius:8px;">
                </div>
                <span class="tech-item-name">WhatsApp API</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon">
                    <img src="https://www.google.com/s2/favicons?domain=hubspot.com&sz=128" alt="HubSpot" style="width:40px; height:40px; object-fit:contain; border-radius:8px;">
                </div>
                <span class="tech-item-name">HubSpot</span>
            </div>

            <!-- Set 2 (Duplicated for Seamless 0-to-100% Looping) -->
            <div class="tech-item">
                <div class="tech-item-icon">
                    <img src="https://www.google.com/s2/favicons?domain=n8n.io&sz=128" alt="n8n" style="width:40px; height:40px; object-fit:contain; border-radius:8px;">
                </div>
                <span class="tech-item-name">n8n</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon">
                    <img src="https://www.google.com/s2/favicons?domain=make.com&sz=128" alt="Make" style="width:40px; height:40px; object-fit:contain; border-radius:8px;">
                </div>
                <span class="tech-item-name">Make</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon">
                    <img src="https://www.google.com/s2/favicons?domain=gohighlevel.com&sz=128" alt="GoHighLevel" style="width:40px; height:40px; object-fit:contain; border-radius:8px;">
                </div>
                <span class="tech-item-name">GoHighLevel</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon">
                    <img src="https://www.google.com/s2/favicons?domain=zapier.com&sz=128" alt="Zapier" style="width:40px; height:40px; object-fit:contain; border-radius:8px;">
                </div>
                <span class="tech-item-name">Zapier</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon">
                    <img src="https://www.google.com/s2/favicons?domain=openai.com&sz=128" alt="OpenAI" style="width:40px; height:40px; object-fit:contain; border-radius:8px;">
                </div>
                <span class="tech-item-name">OpenAI</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon">
                    <img src="https://www.google.com/s2/favicons?domain=anthropic.com&sz=128" alt="Claude" style="width:40px; height:40px; object-fit:contain; border-radius:8px;">
                </div>
                <span class="tech-item-name">Claude</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon">
                    <img src="https://www.google.com/s2/favicons?domain=whatsapp.com&sz=128" alt="WhatsApp API" style="width:40px; height:40px; object-fit:contain; border-radius:8px;">
                </div>
                <span class="tech-item-name">WhatsApp API</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon">
                    <img src="https://www.google.com/s2/favicons?domain=hubspot.com&sz=128" alt="HubSpot" style="width:40px; height:40px; object-fit:contain; border-radius:8px;">
                </div>
                <span class="tech-item-name">HubSpot</span>
            </div>

        </div>
    </div>
</section>
<!-- Technologies We're Using Marquee Section End -->

<!-- Our Process Section Start -->
<section id="process-section" class="section-padding bg-warm-peach text-dark border-top border-light-subtle">
    <div class="container">
        <div class="text-center mb-5 max-w-700 mx-auto">
            <span class="badge rounded-pill border border-secondary text-light mb-3 px-3 py-2" style="background: rgba(255,255,255,0.05); letter-spacing: 1px;">HOW WE WORK</span>
            <h2 class="display-5 fw-extrabold mb-3 typewriter-anim">Our 4-Step Automation Process</h2>
            <p class="text-secondary fs-5">A structured, collaborative approach to connecting your business operations.</p>
        </div>
        
        <div class="row g-4 mt-2">
            <!-- Step 1 -->
            <div class="col-lg-3 col-md-6">
                <div class="p-4 bg-white rounded-4 h-100 shadow-sm border border-light-subtle position-relative">
                    <span class="position-absolute top-0 end-0 m-3 text-accent-brand fw-extrabold display-6 opacity-25">01</span>
                    <div class="icon-box mb-3"><i class="fa-solid fa-phone text-accent-brand"></i></div>
                    <h5 class="fw-bold text-dark">Discovery Call</h5>
                    <p class="text-muted small mb-0">We analyze your current tools, identify manual bottlenecks, and map out opportunities to save time.</p>
                </div>
            </div>
            <!-- Step 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="p-4 bg-white rounded-4 h-100 shadow-sm border border-light-subtle position-relative">
                    <span class="position-absolute top-0 end-0 m-3 text-accent-brand fw-extrabold display-6 opacity-25">02</span>
                    <div class="icon-box mb-3"><i class="fa-solid fa-compass text-accent-brand"></i></div>
                    <h5 class="fw-bold text-dark">Workflow Design</h5>
                    <p class="text-muted small mb-0">We design a visual blueprint mapping out exactly how your CRM, emails, and tools will sync.</p>
                </div>
            </div>
            <!-- Step 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="p-4 bg-white rounded-4 h-100 shadow-sm border border-light-subtle position-relative">
                    <span class="position-absolute top-0 end-0 m-3 text-accent-brand fw-extrabold display-6 opacity-25">03</span>
                    <div class="icon-box mb-3"><i class="fa-solid fa-code text-accent-brand"></i></div>
                    <h5 class="fw-bold text-dark">Build & Test</h5>
                    <p class="text-muted small mb-0">We build the active node pipelines (n8n/Make) and run strict test cases to ensure data flows flawlessly.</p>
                </div>
            </div>
            <!-- Step 4 -->
            <div class="col-lg-3 col-md-6">
                <div class="p-4 bg-white rounded-4 h-100 shadow-sm border border-light-subtle position-relative">
                    <span class="position-absolute top-0 end-0 m-3 text-accent-brand fw-extrabold display-6 opacity-25">04</span>
                    <div class="icon-box mb-3"><i class="fa-solid fa-circle-check text-accent-brand"></i></div>
                    <h5 class="fw-bold text-dark">Launch & Support</h5>
                    <p class="text-muted small mb-0">We launch the systems live, hand over documentation, and provide ongoing optimization support.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Process Section End -->

<!-- Portfolio Section Start -->
<section id="portfolio-section" class="section-padding bg-light-gray text-dark">
    <div class="container max-w-1000">
        <div class="text-center mb-5 max-w-700 mx-auto">
            <span class="badge rounded-pill border border-secondary text-light mb-3 px-3 py-2" style="background: rgba(255,255,255,0.05); letter-spacing: 1px;">SERVICES & CASE STUDIES</span>
            <h2 class="display-5 fw-extrabold mb-3 typewriter-anim">Our Work in Action</h2>
            <p class="text-secondary fs-5">Take a look at how we deploy custom code and AI agents to transform businesses.</p>
        </div>
        
        <div class="row g-4 mt-2">
            <!-- Project 1: Web Development -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="portfolio-card bg-white rounded-4 border p-3 h-100 position-relative shadow-sm text-start" style="transition: transform 0.35s ease, box-shadow 0.35s ease, border-color 0.35s ease;">
                    <div class="portfolio-preview rounded-3 overflow-hidden position-relative bg-light mb-4 border border-light-subtle shadow-sm" style="height: 250px;">
                        <img src="assets/img/services/web_dev_light.jpg" alt="Web Development" class="w-100 h-100 object-fit-cover">
                    </div>
                    <div class="portfolio-info px-2">
                        <h3 class="h5 fw-bold mb-2 text-dark">Web Development</h3>
                        <p class="text-secondary mb-0 fs-6">High-performance custom web apps and bespoke E-commerce storefronts engineered for speed and conversion.</p>
                    </div>
                </div>
            </div>

            <!-- Project 2: AI Agents -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                <div class="portfolio-card bg-white rounded-4 border p-3 h-100 position-relative shadow-sm text-start" style="transition: transform 0.35s ease, box-shadow 0.35s ease, border-color 0.35s ease;">
                    <div class="portfolio-preview rounded-3 overflow-hidden position-relative bg-light mb-4 border border-light-subtle shadow-sm" style="height: 250px;">
                        <img src="assets/img/services/ai_agents_light.jpg" alt="AI Agents" class="w-100 h-100 object-fit-cover">
                    </div>
                    <div class="portfolio-info px-2">
                        <h3 class="h5 fw-bold mb-2 text-dark">AI Agents & Chatbots</h3>
                        <p class="text-secondary mb-0 fs-6">Autonomous agents that handle customer support, lead qualification, and dynamic reasoning 24/7.</p>
                    </div>
                </div>
            </div>

            <!-- Project 3: AI Automations -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                <div class="portfolio-card bg-white rounded-4 border p-3 h-100 position-relative shadow-sm text-start" style="transition: transform 0.35s ease, box-shadow 0.35s ease, border-color 0.35s ease;">
                    <div class="portfolio-preview rounded-3 overflow-hidden position-relative bg-light mb-4 border border-light-subtle shadow-sm" style="height: 250px;">
                        <img src="assets/img/services/automations_light.jpg" alt="AI Automations" class="w-100 h-100 object-fit-cover">
                    </div>
                    <div class="portfolio-info px-2">
                        <h3 class="h5 fw-bold mb-2 text-dark">AI Automations</h3>
                        <p class="text-secondary mb-0 fs-6">Data pipelines and automated workflows across n8n, Make, and GoHighLevel to sync your operations flawlessly.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio Section End -->


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
            </div></div>
    </div>
</section>
<!-- Packages Section End -->

<!-- CTA Section Start -->
<section class="cta-section section-padding bg-white border-top border-light-subtle text-center">
    <div class="container max-w-700">
        <span class="badge rounded-pill border border-secondary text-light mb-3 px-3 py-2" style="background: rgba(255,255,255,0.05); letter-spacing: 1px;">LET'S BUILD SOMETHING GREAT</span>
        <h2 class="display-4 fw-extrabold mb-4 text-dark">Ready to grow your business online?</h2>
        <p class="fs-5 text-secondary mb-5">Book a free, no-pressure consultation. We'll review your goals and tell you exactly what it'll take.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="contact" class="btn btn-brand btn-lg px-5 py-3 shadow-sm">
                <span>Book a Free Consultation</span>
                <span class="arrow-btn"><i class="fa-solid fa-calendar-check"></i></span>
            </a>
            <a href="ai-automated-solutions" class="btn btn-outline-dark btn-lg px-5 py-3">
                <span>See Services</span>
            </a>
        </div>
    </div>
</section>
<!-- CTA Section End -->
<!-- Testimonials Section Start -->
<!-- TODO: When collecting future testimonials, prioritize ones with specific measurable results (e.g., "reduced resolution time by 70%") -->
<section id="testimonials-section" class="section-padding bg-light-gray text-dark border-top border-light-subtle">
    <div class="container max-w-800">
        <div class="text-center mb-5">
            <span class="badge rounded-pill border border-secondary text-light mb-3 px-3 py-2" style="background: rgba(255,255,255,0.05); letter-spacing: 1px;">TESTIMONIALS</span>
            <h2 class="display-5 fw-extrabold mb-3 typewriter-anim">What Our Clients Say</h2>
            <p class="text-secondary fs-5">Trusted by tech companies and service providers worldwide.</p>
        </div>
        
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active text-center py-4">
                    <div class="fs-2 text-accent-brand mb-3"><i class="fa-solid fa-quote-left"></i></div>
                    <p class="fs-5 text-secondary px-md-5 italic">
                        "Automatixes transformed our sales onboarding. They built a custom n8n lead scoring agent that synced our calendar, CRM, and emails seamlessly. The team was fast, professional, and precise!"
                    </p>
                    <h5 class="fw-bold text-dark mt-4 mb-1">M. Ibrahim</h5>
                    <p class="text-muted small">CEO, TechVantage Corp</p>
                </div>
                <div class="carousel-item text-center py-4">
                    <div class="fs-2 text-accent-brand mb-3"><i class="fa-solid fa-quote-left"></i></div>
                    <p class="fs-5 text-secondary px-md-5 italic">
                        "The website design they created was stunning. High-speed, responsive, and completely custom. Plus, their product shoot photography added a premium touch to our landing page."
                    </p>
                    <h5 class="fw-bold text-dark mt-4 mb-1">Sarah K.</h5>
                    <p class="text-muted small">Brand Manager, Luxe Aesthetics</p>
                </div>
            </div>
            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle p-3" aria-hidden="true" style="background-size: 50%; opacity: 0.8;"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle p-3" aria-hidden="true" style="background-size: 50%; opacity: 0.8;"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
<!-- Testimonials Section End -->

<!-- FAQ Section Start -->
<section id="faq-section" class="section-padding bg-transparent text-white border-top border-light-subtle">
    <div class="container max-w-800">
        <div class="text-center mb-5">
            <span class="badge rounded-pill border border-secondary text-light mb-3 px-3 py-2" style="background: rgba(255,255,255,0.05); letter-spacing: 1px;">QUESTIONS</span>
            <h2 class="display-5 fw-extrabold mb-3 typewriter-anim">Frequently Asked Questions</h2>
            <p class="text-secondary fs-5">Common queries answered about our development and AI processes.</p>
        </div>
        
        <div class="accordion accordion-flush" id="faqAccordion">
            <!-- FAQ 1 -->
            <div class="accordion-item bg-transparent border-bottom border-light-subtle">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed bg-transparent fw-bold text-dark fs-5 py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        How long does an AI Automation workflow setup take?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-muted py-3">
                        Generally, standard workflow automations (like email pipelines, CRM syncing, or simple chatbots) take between 1 to 2 weeks to design, integrate, test, and launch.
                    </div>
                </div>
            </div>
            <!-- FAQ 2 -->
            <div class="accordion-item bg-transparent border-bottom border-light-subtle">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed bg-transparent fw-bold text-dark fs-5 py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Are my client leads and databases secure with your setup?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-muted py-3">
                        Yes. Your data is protected by strict Firestore security rules that control exactly who can read or write it, and all form submissions are validated and sanitized server-side to block spam and malicious input.
                    </div>
                </div>
            </div>
            <!-- FAQ 3 -->
            <div class="accordion-item bg-transparent border-bottom border-light-subtle">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed bg-transparent fw-bold text-dark fs-5 py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Can we link third-party tools like Slack or WhatsApp?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-muted py-3">
                        Yes, we integrate n8n, Make, or custom API endpoints to route data triggers to WhatsApp business channels, Slack workspaces, or local Discord systems.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FAQ Section End -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How long does an AI Automation workflow setup take?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Generally, standard workflow automations (like email pipelines, CRM syncing, or simple chatbots) take between 1 to 2 weeks to design, integrate, test, and launch."
      }
    },
    {
      "@type": "Question",
      "name": "Are my client leads and databases secure with your setup?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Your data is protected by strict Firestore security rules that control exactly who can read or write it, and all form submissions are validated and sanitized server-side to block spam and malicious input."
      }
    },
    {
      "@type": "Question",
      "name": "Can we link third-party tools like Slack or WhatsApp?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we integrate n8n, Make, or custom API endpoints to route data triggers to WhatsApp business channels, Slack workspaces, or local Discord systems."
      }
    }
  ]
}
</script>





<!-- Contact Section Start -->
<section id="contact-section" class="section-padding bg-transparent text-white">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5">
                <span class="badge rounded-pill border border-secondary text-light mb-3 px-3 py-2" style="background: rgba(255,255,255,0.05); letter-spacing: 1px;">GET IN TOUCH</span>
                <h2 class="display-6 fw-extrabold text-dark mb-4 typewriter-anim">Start Your Automation Journey</h2>
                <p class="text-secondary fs-5 mb-4">
                    Send us your details. Submitting this form writes directly to our Firestore database and triggers our notifications.
                </p>
                <div class="contact-details mt-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="icon-box me-3"><i class="fa-solid fa-envelope text-accent-brand"></i></div>
                        <div>
                            <h6 class="mb-0 text-muted">Email Us</h6>
                            <a href="mailto:contact@automatixes.com" class="text-dark text-decoration-none fw-bold">contact@automatixes.com</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="icon-box me-3"><i class="fa-solid fa-phone text-accent-brand"></i></div>
                        <div>
                            <h6 class="mb-0 text-muted">Call Us</h6>
                            <a href="tel:+923366920141" class="text-dark text-decoration-none fw-bold">+92 336 6920141</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-7">
                <div class="contact-form-wrapper p-4 p-md-5 rounded-4 shadow-sm bg-light">
                    <form id="contact-firebase-form" novalidate>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label for="contact-name" class="form-label text-white fw-bold">Full Name</label>
                                <input type="text" class="form-control border-light-subtle bg-transparent text-white" id="contact-name" placeholder="John Doe" required>
                            </div>
                            <div class="col-md-6">
                                <label for="contact-email" class="form-label text-white fw-bold">Email Address</label>
                                <input type="email" class="form-control border-light-subtle bg-transparent text-white" id="contact-email" placeholder="john@example.com" required>
                            </div>
                            <div class="col-md-6">
                                <label for="contact-phone" class="form-label text-white fw-bold">Phone</label>
                                <input type="tel" class="form-control border-light-subtle bg-transparent text-white" id="contact-phone" placeholder="+92 300 1234567">
                            </div>
                            <div class="col-md-6">
                                <label for="contact-biz-link" class="form-label text-white fw-bold">Business / Freelancer Link</label>
                                <input type="url" class="form-control border-light-subtle bg-transparent text-white" id="contact-biz-link" placeholder="https://yourprofile.com">
                            </div>
                            <div class="col-12">
                                <label for="contact-service" class="form-label text-white fw-bold">Service Required</label>
                                <select class="form-select border-light-subtle bg-transparent text-white" id="contact-service" required>
                                    <option value="" disabled selected>Select a Service</option>
                                    <option value="AI Agents">AI Agents Integration</option>
                                    <option value="AI Automations">AI Automations (n8n/Make)</option>
                                    <option value="Web Development">Web & App Development</option>
                                    <option value="UI/UX Design">UI/UX Design</option>
                                    <option value="Support">Support</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="contact-message" class="form-label text-white fw-bold">Project Description</label>
                                <textarea class="form-control border-light-subtle bg-transparent text-white" id="contact-message" rows="4" placeholder="Tell us about your requirements..." required></textarea>
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
<!-- Contact Section End -->

<!-- JSON-LD FAQ and Review Schemas -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "How long does an AI Automation workflow setup take?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Generally, standard workflow automations (like email pipelines, CRM syncing, or simple chatbots) take between 1 to 2 weeks to design, integrate, test, and launch."
    }
  },{
    "@type": "Question",
    "name": "Are my client leads and databases secure with your setup?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes. Your data is protected by strict Firestore security rules that control exactly who can read or write it, and all form submissions are validated and sanitized server-side to block spam and malicious input."
    }
  },{
    "@type": "Question",
    "name": "Can we link third-party tools like Slack or WhatsApp?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, we integrate n8n, Make, or custom API endpoints to route data triggers to WhatsApp business channels, Slack workspaces, or local Discord systems."
    }
  }]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Review",
  "itemReviewed": {
    "@type": "LocalBusiness",
    "name": "Automatixes"
  },
  "author": {
    "@type": "Person",
    "name": "M. Ibrahim"
  },
  "reviewRating": {
    "@type": "Rating",
    "ratingValue": "5"
  },
  "reviewBody": "Automatixes transformed our sales onboarding. They built a custom n8n lead scoring agent that synced our calendar, CRM, and emails seamlessly. The team was fast, professional, and precise!"
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Review",
  "itemReviewed": {
    "@type": "LocalBusiness",
    "name": "Automatixes"
  },
  "author": {
    "@type": "Person",
    "name": "Sarah K."
  },
  "reviewRating": {
    "@type": "Rating",
    "ratingValue": "5"
  },
  "reviewBody": "The website design they created was stunning. High-speed, responsive, and completely custom. Plus, their product shoot photography added a premium touch to our landing page."
}
</script>

<?php include 'footer.php'; ?>






