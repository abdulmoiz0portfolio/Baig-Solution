<?php 
include_once 'security.php'; 

if (!isset($page_key)) {
    $page_key = 'index';
}

$meta_config = [
    'index' => [
        'title' => 'AI Automation Agency (n8n, Make, GoHighLevel) | Baig Solution',
        'desc' => 'Baig Solution is an AI-first agency building custom AI agents and workflow automations to connect your CRM, WhatsApp, and emails. Scale operations 24/7.',
        'keywords' => 'AI Automation Agency, n8n, Make, GoHighLevel, Zapier, AI Agents, New Jersey, software development, CRM integration',
        'url' => ''
    ],
    'about' => [
        'title' => 'Our Mission & Automation Experts | Baig Solution',
        'desc' => 'Meet Baig Solution. We design custom AI agent systems, API integrations, and e-commerce growth strategies to help small & mid-sized businesses automate operations.',
        'keywords' => 'About Baig Solution, AI Engineers, New Jersey AI, CRM automation experts, n8n consultants',
        'url' => 'about'
    ],
    'website-development' => [
        'title' => 'Bespoke Web & App Development Services | Baig Solution',
        'desc' => 'High-performance, secure, responsive web applications and custom single-page apps optimized for speed and automated lead conversion. Start today.',
        'keywords' => 'Bespoke Web Development, Next.js, Firebase, Single Page Apps, SEO Optimization',
        'url' => 'website-development'
    ],
    'ai-agents' => [
        'title' => 'Custom Autonomous AI Support Agents | Baig Solution',
        'desc' => 'Deploy natural language AI support agents trained on your custom knowledge base. Qualify leads and answer customer service queries 24/7 with zero hallucination.',
        'keywords' => 'Autonomous AI Agents, AI chatbot, custom RAG, customer service automation, document indexing',
        'url' => 'ai-agents'
    ],
    'ai-automations' => [
        'title' => 'Workflow & CRM Automation (n8n, Make) | Baig Solution',
        'desc' => 'Eliminate manual admin tasks. We build end-to-end automations connecting HubSpot, Slack, WhatsApp, and email platforms to streamline lead management.',
        'keywords' => 'AI Automations, n8n agency, Make.com integration, HubSpot workflow, Zapier triggers',
        'url' => 'ai-automations'
    ],
    'product-shoot' => [
        'title' => 'Commercial Product Photography & Studio Shoots | Baig Solution',
        'desc' => 'High-end e-commerce product shoots featuring studio lighting and expert prop styling that increases brand conversion rates. Browse our portfolio.',
        'keywords' => 'Product Shoot Photography, e-commerce photography, luxury product studio, backlighting styling',
        'url' => 'product-shoot'
    ],
    'contact' => [
        'title' => 'Book a Free AI Operations Audit & Consultation | Baig Solution',
        'desc' => 'Ready to automate your operations? Contact Baig Solution to schedule a free automation audit. We connect your calendar, CRM, and communication tools.',
        'keywords' => 'Contact Baig Solution, AI operations audit, book consultation, New Jersey digital agency',
        'url' => 'contact'
    ],
    'admin' => [
        'title' => 'CRM Lead Logs Control Panel | Baig Solution',
        'desc' => 'Internal dashboard for Baig Solution administrators to track real-time contact leads, newsletter subscribers, and automated cost quote submissions.',
        'keywords' => 'Admin dashboard, lead tracking, CRM logs',
        'url' => 'admin'
    ]
];

$active_meta = isset($meta_config[$page_key]) ? $meta_config[$page_key] : $meta_config['index'];
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'baigsolution.com';
$protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? "https" : "http";
$canonical_url = "{$protocol}://{$host}/" . $active_meta['url'];
$og_image = "{$protocol}://{$host}/assets/img/services/ai_automations.jpg";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $active_meta['title']; ?></title>
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    
    <!-- Meta SEO Tags -->
    <meta name="description" content="<?php echo $active_meta['desc']; ?>">
    <meta name="keywords" content="<?php echo $active_meta['keywords']; ?>">
    <meta name="author" content="Baig Solution">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $canonical_url; ?>">
    <meta property="og:title" content="<?php echo $active_meta['title']; ?>">
    <meta property="og:description" content="<?php echo $active_meta['desc']; ?>">
    <meta property="og:image" content="<?php echo $og_image; ?>">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="<?php echo $canonical_url; ?>">
    <meta name="twitter:title" content="<?php echo $active_meta['title']; ?>">
    <meta name="twitter:description" content="<?php echo $active_meta['desc']; ?>">
    <meta name="twitter:image" content="<?php echo $og_image; ?>">

    <!-- JSON-LD Structured Data Schema -->
    <?php if ($page_key === 'index'): ?>
    <!-- Organization Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Baig Solution",
      "url": "<?php echo $protocol; ?>://<?php echo $host; ?>",
      "logo": "<?php echo $protocol; ?>://<?php echo $host; ?>/assets/img/services/ai_automations.jpg",
      "description": "An AI-first automation agency that designs custom AI agents and workflow automations to run business operations 24/7.",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+92-336-6920141",
        "contactType": "customer service",
        "email": "bobrober2323@gmail.com"
      }
    }
    </script>

    <!-- Local Business Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "Baig Solution",
      "image": "<?php echo $og_image; ?>",
      "@id": "<?php echo $protocol; ?>://<?php echo $host; ?>/#localbusiness",
      "url": "<?php echo $protocol; ?>://<?php echo $host; ?>",
      "telephone": "+92-336-6920141",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "New Jersey",
        "addressRegion": "NJ",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 40.0583,
        "longitude": -74.4057
      },
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday"
        ],
        "opens": "09:00",
        "closes": "18:00"
      },
      "areaServed": [
        {
          "@type": "State",
          "name": "New Jersey"
        },
        {
          "@type": "Country",
          "name": "United States"
        }
      ]
    }
    </script>
    <?php endif; ?>

    <!-- Service Schema -->
    <?php if (in_array($page_key, ['ai-agents', 'ai-automations', 'website-development', 'product-shoot'])): ?>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "name": "<?php echo $active_meta['title']; ?>",
      "serviceType": "<?php echo str_replace(' | Baig Solution', '', $active_meta['title']); ?>",
      "provider": {
        "@type": "Organization",
        "name": "Baig Solution",
        "url": "<?php echo $protocol; ?>://<?php echo $host; ?>"
      },
      "description": "<?php echo $active_meta['desc']; ?>",
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      }
    }
    </script>
    <?php endif; ?>

    <!-- BreadcrumbList Schema -->
    <?php if ($page_key !== 'index'): ?>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "<?php echo $protocol; ?>://<?php echo $host; ?>"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "<?php echo str_replace(' | Baig Solution', '', $active_meta['title']); ?>",
        "item": "<?php echo $canonical_url; ?>"
      }]
    }
    </script>
    <?php endif; ?>

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
                <span data-text-preloader="A" class="letters-loading">A</span>
                <span data-text-preloader="I" class="letters-loading">I</span>
                <span data-text-preloader="G" class="letters-loading">G</span>
                <span data-text-preloader="S" class="letters-loading">S</span>
                <span data-text-preloader="O" class="letters-loading">O</span>
                <span data-text-preloader="L" class="letters-loading">L</span>
                <span data-text-preloader="U" class="letters-loading">U</span>
                <span data-text-preloader="T" class="letters-loading">T</span>
                <span data-text-preloader="I" class="letters-loading">I</span>
                <span data-text-preloader="O" class="letters-loading">O</span>
                <span data-text-preloader="N" class="letters-loading">N</span>
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
                                <li><a class="dropdown-item py-2 fw-semibold text-secondary" href="ai-agents">Autonomous AI Agents</a></li>
                                <li><a class="dropdown-item py-2 fw-semibold text-secondary" href="ai-automations">AI Automations</a></li>
                                <li><a class="dropdown-item py-2 fw-semibold text-secondary" href="website-development">Web & App Development</a></li>
                                <li><a class="dropdown-item py-2 fw-semibold text-secondary" href="product-shoot">Product Shoot</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="contact">Contact us</a></li>
                        <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                            <a href="contact" class="btn btn-brand">Get Started <span class="arrow-btn"><i class="fa-solid fa-arrow-up-right"></i></span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header Navigation End -->

    <div id="smooth-wrapper">
        <div id="smooth-content">
