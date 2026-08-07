<?php 
$page_key = 'blogs'; 
include 'header.php'; 
?>

<!-- Subpage Hero Section -->
<section class="subpage-hero text-center position-relative">
    <div class="container">
        <span class="badge bg-warm-peach text-accent-brand rounded-pill px-3 py-2 fw-semibold mb-3">
            <i class="fa-solid fa-book-open me-1"></i> Our Resources
        </span>
        <h1 class="display-4 fw-extrabold text-dark mb-3">Insights & Updates</h1>
        <p class="lead text-secondary max-width-600 mx-auto">
            Read our latest insights on AI automation, web development, and digital marketing strategies for growing your business.
        </p>
    </div>
</section>

<!-- Blog Listing Section -->
<section class="py-5 bg-light-subtle">
    <div class="container py-4">
        <div class="row g-4">
            
            <!-- Blog Card 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden blog-card">
                    <div class="position-relative">
                        <img src="assets/img/services/ai_agents.jpg" class="card-img-top object-fit-cover" alt="AI Agents" style="height: 220px;">
                        <span class="badge bg-brand position-absolute top-0 end-0 m-3 rounded-pill px-3 py-2">AI Automation</span>
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <div class="text-muted small mb-2"><i class="fa-regular fa-calendar me-1"></i> August 10, 2026</div>
                        <h5 class="card-title fw-bold text-dark mb-3">How Autonomous AI Agents Are Replacing Traditional Support</h5>
                        <p class="card-text text-secondary mb-4 flex-grow-1">
                            Discover how businesses are saving thousands of hours by deploying custom-trained AI support agents that never sleep and never hallucinate.
                        </p>
                        <a href="blog-detail" class="btn btn-outline-brand rounded-pill align-self-start fw-semibold px-4">
                            Read More <i class="fa-solid fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Blog Card 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden blog-card">
                    <div class="position-relative">
                        <img src="assets/img/services/ai_automations.jpg" class="card-img-top object-fit-cover" alt="n8n Workflows" style="height: 220px;">
                        <span class="badge bg-brand position-absolute top-0 end-0 m-3 rounded-pill px-3 py-2">Workflows</span>
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <div class="text-muted small mb-2"><i class="fa-regular fa-calendar me-1"></i> July 28, 2026</div>
                        <h5 class="card-title fw-bold text-dark mb-3">Why We Prefer n8n Over Zapier For Enterprise Automation</h5>
                        <p class="card-text text-secondary mb-4 flex-grow-1">
                            A deep dive into node-based visual programming, webhooks, and cost-efficiency when scaling your CRM and email operations using n8n.
                        </p>
                        <a href="blog-detail" class="btn btn-outline-brand rounded-pill align-self-start fw-semibold px-4">
                            Read More <i class="fa-solid fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Blog Card 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden blog-card">
                    <div class="position-relative">
                        <img src="assets/img/services/web_dev.jpg" class="card-img-top object-fit-cover" alt="Web Development" style="height: 220px;">
                        <span class="badge bg-brand position-absolute top-0 end-0 m-3 rounded-pill px-3 py-2">Engineering</span>
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <div class="text-muted small mb-2"><i class="fa-regular fa-calendar me-1"></i> July 15, 2026</div>
                        <h5 class="card-title fw-bold text-dark mb-3">The Importance of Bespoke Web Applications in 2026</h5>
                        <p class="card-text text-secondary mb-4 flex-grow-1">
                            Why standard templates fail to convert modern consumers, and how custom-built Single Page Applications drive real business growth.
                        </p>
                        <a href="blog-detail" class="btn btn-outline-brand rounded-pill align-self-start fw-semibold px-4">
                            Read More <i class="fa-solid fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
        
        <!-- Pagination (Dummy) -->
        <div class="d-flex justify-content-center mt-5 pt-3">
            <nav aria-label="Blog pagination">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link rounded-circle border-0 me-2 d-flex align-items-center justify-content-center shadow-sm" href="#" style="width: 45px; height: 45px;"><i class="fa-solid fa-chevron-left"></i></a>
                    </li>
                    <li class="page-item active"><a class="page-link rounded-circle border-0 me-2 d-flex align-items-center justify-content-center shadow-sm bg-brand text-white" href="#" style="width: 45px; height: 45px;">1</a></li>
                    <li class="page-item"><a class="page-link rounded-circle border-0 me-2 d-flex align-items-center justify-content-center shadow-sm text-dark" href="#" style="width: 45px; height: 45px;">2</a></li>
                    <li class="page-item"><a class="page-link rounded-circle border-0 me-2 d-flex align-items-center justify-content-center shadow-sm text-dark" href="#" style="width: 45px; height: 45px;">3</a></li>
                    <li class="page-item">
                        <a class="page-link rounded-circle border-0 me-2 d-flex align-items-center justify-content-center shadow-sm text-dark" href="#" style="width: 45px; height: 45px;"><i class="fa-solid fa-chevron-right"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
        
    </div>
</section>

<!-- Custom Styles for Blog Cards -->
<style>
    .blog-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .blog-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.1) !important;
    }
    .page-link {
        color: #333;
        background-color: #fff;
    }
    .page-link:hover {
        background-color: #f8f9fa;
        color: var(--bs-primary);
    }
</style>

<?php include 'footer.php'; ?>
