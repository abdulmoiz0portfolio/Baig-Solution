import io
import re

with io.open('assets/css/main.css', 'r', encoding='utf-8') as f:
    content = f.read()

content = content.replace('font-size: 55px;', 'font-size: clamp(24px, 7vw, 55px);')
content = content.replace('letter-spacing: 12px;', 'letter-spacing: clamp(4px, 1.5vw, 12px);')
content = content.replace('margin-right: 25px;', 'margin-right: clamp(10px, 2.5vw, 25px);')

with io.open('assets/css/main.css', 'w', encoding='utf-8') as f:
    f.write(content)
