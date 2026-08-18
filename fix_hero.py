import io
import re

for filename in ['index.php', 'index.html']:
    with io.open(filename, 'r', encoding='utf-8') as f:
        content = f.read()
    
    # Locate the block to replace
    pattern = r'<!-- Placeholder for 3D elements.*?<!-- Placeholder for 3D elements.*?</div>\s*</div>'
    # Actually, we can just find the comment and the two following divs.
    pattern = r'<!-- Placeholder for 3D elements.*?</div>\s*</div>'
    
    # Let's be more precise
    target_pattern = r'<!-- Placeholder for 3D elements \(can be replaced with actual images later\) -->\s*<div class="position-absolute".*?</svg>\s*</div>\s*<div class="position-absolute".*?</svg>\s*</div>'

    new_svgs = '''<!-- Floating Automation Workflow Nodes (Left) -->
    <style>
        @keyframes heroFloat {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }
    </style>
    <div class="position-absolute d-none d-lg-block" style="top: 25%; left: 8%; z-index: 0; opacity: 0.7; pointer-events: none; animation: heroFloat 6s ease-in-out infinite;">
        <!-- n8n style workflow -->
        <svg width="220" height="280" viewBox="0 0 220 280" fill="none" xmlns="http://www.w3.org/2000/svg">
            <!-- Connection Lines -->
            <path d="M110 50 C 110 90, 110 90, 110 120" stroke="#C8E019" stroke-width="3" fill="none"/>
            <path d="M110 160 C 110 190, 110 190, 110 220" stroke="#C8E019" stroke-width="3" fill="none"/>
            <!-- Branch line -->
            <path d="M110 160 C 160 180, 180 190, 180 220" stroke="#0D6171" stroke-width="3" stroke-dasharray="6 6" fill="none"/>
            
            <!-- Node 1: Trigger -->
            <rect x="30" y="10" width="160" height="40" rx="8" fill="#111111" stroke="#C8E019" stroke-width="2"/>
            <rect x="30" y="10" width="40" height="40" rx="8" fill="#C8E019"/>
            <path d="M42 25 L50 17 L58 25 M50 17 L50 33" stroke="#111" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <rect x="85" y="27" width="80" height="6" rx="3" fill="#333333"/>
            
            <!-- Node 2: Process/Filter -->
            <rect x="30" y="120" width="160" height="40" rx="8" fill="#111111" stroke="#0D6171" stroke-width="2"/>
            <rect x="30" y="120" width="40" height="40" rx="8" fill="#0D6171"/>
            <circle cx="50" cy="140" r="8" stroke="#111" stroke-width="2" fill="none"/>
            <rect x="85" y="137" width="60" height="6" rx="3" fill="#333333"/>
            
            <!-- Node 3: Output 1 -->
            <rect x="30" y="220" width="160" height="40" rx="8" fill="#111111" stroke="#C8E019" stroke-width="2"/>
            <rect x="30" y="220" width="40" height="40" rx="8" fill="#C8E019"/>
            <path d="M42 235 L50 243 L58 235 M50 227 L50 243" stroke="#111" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <rect x="85" y="237" width="90" height="6" rx="3" fill="#333333"/>
        </svg>
    </div>
    
    <!-- Floating Automation Workflow Nodes (Right) -->
    <div class="position-absolute d-none d-lg-block" style="bottom: 15%; right: 10%; z-index: 0; opacity: 0.6; pointer-events: none; animation: heroFloat 8s ease-in-out infinite reverse;">
        <svg width="200" height="200" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
            <!-- Central Node -->
            <circle cx="100" cy="100" r="45" stroke="#0D6171" stroke-width="2" stroke-dasharray="6 6" fill="none"/>
            <circle cx="100" cy="100" r="25" fill="#111" stroke="#C8E019" stroke-width="3"/>
            <circle cx="100" cy="100" r="8" fill="#C8E019"/>
            
            <!-- Orbiting Nodes -->
            <!-- Top -->
            <line x1="100" y1="75" x2="100" y2="40" stroke="#C8E019" stroke-width="2" stroke-dasharray="4 4"/>
            <rect x="85" y="15" width="30" height="30" rx="6" fill="#111" stroke="#C8E019" stroke-width="2"/>
            <circle cx="100" cy="30" r="4" fill="#C8E019"/>
            
            <!-- Bottom Right -->
            <line x1="118" y1="118" x2="150" y2="150" stroke="#0D6171" stroke-width="2" stroke-dasharray="4 4"/>
            <rect x="140" y="140" width="30" height="30" rx="6" fill="#111" stroke="#0D6171" stroke-width="2"/>
            <circle cx="155" cy="155" r="4" fill="#0D6171"/>
            
            <!-- Bottom Left -->
            <line x1="82" y1="118" x2="50" y2="150" stroke="#A855F7" stroke-width="2" stroke-dasharray="4 4"/>
            <rect x="30" y="140" width="30" height="30" rx="6" fill="#111" stroke="#A855F7" stroke-width="2"/>
            <circle cx="45" cy="155" r="4" fill="#A855F7"/>
        </svg>
    </div>'''

    new_content = re.sub(target_pattern, new_svgs, content, flags=re.DOTALL)
    
    with io.open(filename, 'w', encoding='utf-8') as f:
        f.write(new_content)
