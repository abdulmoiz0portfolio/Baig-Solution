<?php include_once 'security.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baig Solution | AI Agents, Automations & Website Development</title>
    
    <!-- Meta SEO Tags -->
    <meta name="description" content="Baig Solution is an AI-first digital agency. We build websites, mobile apps, AI automations and brands for growing businesses.">
    <meta name="keywords" content="AI Agents, AI Automation, Web Development, Baig Solution, AI Agency, Software Development, NJ, New Jersey">
    <meta name="author" content="Baig Solution">
    
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- FontAwesome CDN for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <!-- Google Fonts: Plus Jakarta Sans / Outfit -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- n8n Chat Widget CSS -->
    <link href="https://cdn.jsdelivr.net/npm/@n8n/chat/dist/style.css" rel="stylesheet" />
    
    <!-- Custom Main CSS -->
    <link rel="stylesheet" href="assets/css/main.css?v=1.0.2">
</head>
<body>
    <!-- Custom Mouse Cursor Follower -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="animation-preloader">
            <div class="spinner"></div>
            <div class="txt-loading">
                <span data-text-preloader="B" class="letters-loading">B</span>
                <span data-text-preloader="a" class="letters-loading">a</span>
                <span data-text-preloader="i" class="letters-loading">i</span>
                <span data-text-preloader="g" class="letters-loading">g</span>
                <span data-text-preloader="S" class="letters-loading">S</span>
                <span data-text-preloader="o" class="letters-loading">o</span>
                <span data-text-preloader="l" class="letters-loading">l</span>
                <span data-text-preloader="u" class="letters-loading">u</span>
                <span data-text-preloader="t" class="letters-loading">t</span>
                <span data-text-preloader="i" class="letters-loading">i</span>
                <span data-text-preloader="o" class="letters-loading">o</span>
                <span data-text-preloader="n" class="letters-loading">n</span>
            </div>
            <p class="text-center loading-subtitle">Loading</p>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Header Navigation Start -->
    <header id="header-sticky" class="header-nav">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light py-0">
                <a class="navbar-brand d-flex align-items-center" href="index">
                    <span class="logo-icon"><i class="fa-solid fa-brain-circuit text-accent-brand me-2"></i></span>
                    <span class="logo-text">BAIG <span class="text-accent-brand">SOLUTION</span></span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mainNavbar">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                        <li class="nav-item"><a class="nav-link active" href="index">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu border-0 shadow-sm" aria-labelledby="servicesDropdown" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border-radius: 12px; padding: 10px;">
                                <li><a class="dropdown-item py-2 fw-semibold text-secondary" href="website-development">Website Development</a></li>
                                <li><a class="dropdown-item py-2 fw-semibold text-secondary" href="ai-agents">Autonomous AI Agents</a></li>
                                <li><a class="dropdown-item py-2 fw-semibold text-secondary" href="ai-automations">AI Automations</a></li>
                                <li><a class="dropdown-item py-2 fw-semibold text-secondary" href="product-shoot">Product Shoot</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="contact">Contact us</a></li>
                        <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                            <a href="contact" class="btn btn-brand">Get Started <span class="arrow-btn"><i class="fa-regular fa-arrow-up-right"></i></span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header Navigation End -->

    <div id="smooth-wrapper">
        <div id="smooth-content">
