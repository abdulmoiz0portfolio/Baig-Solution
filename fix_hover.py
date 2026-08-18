import io
import re

with io.open('footer.php', 'r', encoding='utf-8') as f:
    content = f.read()

pattern = r'#sticky-expert-btn:hover\s*\{[^}]*\}'
new_hover = '''#sticky-expert-btn:hover { 
                  transform: translateY(-50%) translateX(-5px) !important; 
                  background: #B5CC15 !important; 
                  animation: none;
                  box-shadow: -4px 4px 20px rgba(0,0,0,0.3) !important;
              }'''

content = re.sub(pattern, new_hover, content)

with io.open('footer.php', 'w', encoding='utf-8') as f:
    f.write(content)
