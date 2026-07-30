<?php include 'header.php'; ?>

<!-- About Hero Section -->
<section class="subpage-hero text-center text-dark">
    <div class="container">
        <span class="badge bg-brand-translucent text-accent-brand mb-3 font-monospace px-3 py-2 border border-brand-50">ABOUT BAIG SOLUTION</span>
        <h1 class="display-4 fw-extrabold text-dark">Empowering Growth Through AI</h1>
        <div class="title-underline"></div>
        <p class="lead text-secondary mx-auto mt-4 max-w-700">
            We are a group of developers, automated system architects, and design specialists dedicated to replacing high-friction manual business workflows with elegant software solutions.
        </p>
    </div>
</section>

<!-- Vision & Mission Section -->
<section class="section-padding bg-white text-dark">
    <div class="container">
        <div class="row g-5">
            <div class="col-md-6">
                <div class="card-service-item p-5 h-100">
                    <div class="service-icon mb-4"><i class="fa-solid fa-eye text-accent-brand"></i></div>
                    <h3 class="text-dark fw-bold">Our Vision</h3>
                    <p class="text-muted mt-3">
                        To build a digital landscape where businesses don't get bogged down by administrative, manual, and repetitive tasks. We see a future where every business runs on a self-improving automation engine.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-service-item p-5 h-100">
                    <div class="service-icon mb-4"><i class="fa-solid fa-bullseye text-accent-brand"></i></div>
                    <h3 class="text-dark fw-bold">Our Mission</h3>
                    <p class="text-muted mt-3">
                        Our mission is to translate complex artificial intelligence technologies into straightforward automation modules. We construct custom integrations, setup autonomous agents, and deliver web applications that directly boost productivity.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section Start -->
<section id="faq-section" class="section-padding bg-light-gray text-dark border-top border-light-subtle">
    <div class="container max-w-800">
        <div class="text-center mb-5">
            <span class="badge bg-brand-translucent text-accent-brand mb-3 font-monospace px-3 py-2 border border-brand-50">QUESTIONS</span>
            <h2 class="display-5 fw-extrabold mb-3">Frequently Asked Questions</h2>
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
                        Yes, absolutely. We integrate Firebase Firestore directly using secure client SDK parameters and build WAF (Web Application Firewalls) in PHP to sanitize inputs and block bots.
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

<?php include 'footer.php'; ?>
