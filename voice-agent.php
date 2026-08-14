<?php 
$page_key = 'voice-agent'; 
include 'header.php'; 
?>

<!-- Voice Agent Hero Section -->
<section class="voice-agent-hero d-flex align-items-center justify-content-center text-center py-5 min-vh-100" style="background: radial-gradient(circle at center, #fdfbfb 0%, #ebedee 100%);">
    <div class="container py-5">
        
        <div class="mb-4">
            <span class="badge bg-brand text-white rounded-pill px-3 py-2 fw-semibold shadow-sm">
                <i class="fa-solid fa-bolt me-1"></i> Live Demo
            </span>
        </div>
        
        <h1 class="display-4 fw-extrabold text-dark mb-3">Talk to our AI Assistant</h1>
        <p class="lead text-secondary max-width-600 mx-auto mb-5">
            Experience the future of customer support. Click the button below to start a live voice conversation with our autonomous AI agent.
        </p>

        <!-- ElevenLabs Voice Widget -->
        <div class="voice-ui-container position-relative mx-auto my-5 d-flex justify-content-center align-items-center" style="min-height: 200px;">
            <elevenlabs-convai agent-id="agent_1601m004ny6efkns714nfr8vjvqm"></elevenlabs-convai>
            <script src="https://unpkg.com/@elevenlabs/convai-widget-embed" async type="text/javascript"></script>
        </div>

        <div id="call-status" class="mt-4 text-muted fw-semibold">
            Click the widget to start talking to the AI Agent.
        </div>

    </div>
</section>

<?php include 'footer.php'; ?>
