import io
import re

with io.open('assets/css/main.css', 'r', encoding='utf-8') as f:
    content = f.read()

# Replace font-weight: 800 with 700 for letters-loading
content = re.sub(r'(\.letters-loading\s*\{[^}]*font-weight:\s*)800', r'\g<1>700', content)

with io.open('assets/css/main.css', 'w', encoding='utf-8') as f:
    f.write(content)
