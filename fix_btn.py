import io
import re

with io.open('footer.php', 'r', encoding='utf-8') as f:
    content = f.read()

# Replace the sticky button styles
old_btn = '''<button id="sticky-expert-btn" onclick="connectWithExpert()" style="position: fixed; top: 50%; right: 0; transform: translate(calc(100% - 60px), -50%); background: #C8E019; color: white; border: none; padding: 12px 20px 12px 20px; border-radius: 30px 0 0 30px; font-size: 15px; cursor: pointer; outline: none !important; box-shadow: -4px 4px 15px rgba(0,0,0,0.2); font-weight: 600; z-index: 9000; transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), background 0.3s ease, box-shadow 0.3s ease; display: flex; align-items: center; gap: 8px;">'''

new_btn = '''<button id="sticky-expert-btn" onclick="connectWithExpert()" style="position: fixed; top: 50%; right: -5px; transform: translateY(-50%); background: #C8E019; color: #1a1a1a; border: none; padding: 12px 25px 12px 20px; border-radius: 30px 0 0 30px; font-size: 15px; cursor: pointer; outline: none !important; box-shadow: -4px 4px 15px rgba(0,0,0,0.2); font-weight: 700; z-index: 999999; transition: transform 0.3s ease, background 0.3s ease, box-shadow 0.3s ease; display: flex; align-items: center; gap: 10px;">'''

content = content.replace(old_btn, new_btn)

# Update CSS for hover
old_hover = '''#sticky-expert-btn:hover { 
                  transform: translate(0, -50%) !important; 
                  background: #B5CC15 !important; 
                  animation: none;
                  box-shadow: -4px 4px 20px rgba(0,0,0,0.3) !important;
              }'''

new_hover = '''#sticky-expert-btn:hover { 
                  transform: translateY(-50%) translateX(-5px) !important; 
                  background: #B5CC15 !important; 
                  animation: none;
                  box-shadow: -4px 4px 20px rgba(0,0,0,0.3) !important;
              }'''

content = content.replace(old_hover, new_hover)

with io.open('footer.php', 'w', encoding='utf-8') as f:
    f.write(content)
