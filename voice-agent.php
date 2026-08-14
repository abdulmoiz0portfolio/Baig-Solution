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

        <!-- Interactive Calling UI -->
        <div class="voice-ui-container position-relative mx-auto my-5 d-flex justify-content-center align-items-center" style="width: 250px; height: 250px;">
            <!-- Pulsing background rings -->
            <div class="pulse-ring ring-1 position-absolute w-100 h-100 rounded-circle border border-brand border-2 opacity-50"></div>
            <div class="pulse-ring ring-2 position-absolute rounded-circle border border-brand border-2 opacity-25" style="width: 150%; height: 150%;"></div>
            
            <!-- The Main Button -->
            <!-- Note: Attach your Voice Agent trigger (e.g. Vapi, Retell) to this button's ID -->
            <button id="start-voice-agent" class="btn btn-brand rounded-circle position-relative shadow-lg d-flex justify-content-center align-items-center" style="width: 120px; height: 120px; z-index: 10; transition: transform 0.2s;">
                <i class="fa-solid fa-microphone fs-1"></i>
            </button>
        </div>

        <div id="call-status" class="mt-4 text-muted fw-semibold">
            Agent is ready. Click to call.
        </div>

    </div>
</section>

<!-- Custom Styles for Voice Agent -->
<style>
    @keyframes pulse {
        0% { transform: scale(0.9); opacity: 1; }
        100% { transform: scale(1.5); opacity: 0; }
    }
    
    .pulse-ring {
        animation: pulse 2s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
        pointer-events: none;
    }
    .pulse-ring.ring-2 {
        animation-delay: 1s;
    }

    #start-voice-agent:hover {
        transform: scale(1.05);
    }
    #start-voice-agent:active {
        transform: scale(0.95);
    }
    
    /* Animation class to add when agent is talking */
    .agent-talking .ring-1, .agent-talking .ring-2 {
        animation-duration: 1s;
        border-color: #28a745 !important;
    }
    .agent-talking #start-voice-agent {
        background-color: #28a745 !important;
        border-color: #28a745 !important;
    }
</style>

<!-- Voice Agent Integration Script Placeholder -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const callBtn = document.getElementById("start-voice-agent");
        const statusText = document.getElementById("call-status");
        const uiContainer = document.querySelector(".voice-ui-container");
        
        let isCalling = false;

        callBtn.addEventListener("click", function() {
            if (!isCalling) {
                // TODO: Initialize your Voice Agent SDK here (e.g., Vapi.start('YOUR_ASSISTANT_ID'))
                
                // Visual feedback for demo
                isCalling = true;
                statusText.innerText = "Connecting to AI Agent...";
                callBtn.innerHTML = '<i class="fa-solid fa-phone-slash fs-1"></i>';
                
                // Simulate connection
                setTimeout(() => {
                    statusText.innerText = "Agent is listening... Speak now.";
                    uiContainer.classList.add("agent-talking");
                }, 1500);

            } else {
                // TODO: Stop your Voice Agent SDK here (e.g., Vapi.stop())
                
                // Visual feedback for demo
                isCalling = false;
                statusText.innerText = "Call ended. Click to call again.";
                callBtn.innerHTML = '<i class="fa-solid fa-microphone fs-1"></i>';
                uiContainer.classList.remove("agent-talking");
                callBtn.style.backgroundColor = "";
                callBtn.style.borderColor = "";
            }
        });
    });
</script>

<?php include 'footer.php'; ?>
