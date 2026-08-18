import io

with io.open('footer.php', 'r', encoding='utf-8') as f:
    content = f.read()

wa_btn = '''
    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/923366920141" target="_blank" id="sticky-whatsapp-btn" style="position: fixed; bottom: 20px; left: 20px; width: 60px; height: 60px; background: #25D366; color: white; border-radius: 50%; font-size: 32px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 15px rgba(0,0,0,0.3); z-index: 8999; transition: transform 0.3s ease; text-decoration: none;">
        <i class="fa-brands fa-whatsapp"></i>
    </a>
    <style>
        #sticky-whatsapp-btn:hover { transform: scale(1.1) !important; background: #20b858 !important; }
    </style>
    
    <!-- Single Sticky Lead Capture Button -->
'''

content = content.replace('<!-- Single Sticky Lead Capture Button -->', wa_btn)

with io.open('footer.php', 'w', encoding='utf-8') as f:
    f.write(content)
