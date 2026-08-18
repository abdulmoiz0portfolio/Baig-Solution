import io
import re

with io.open('assets/css/main.css', 'r', encoding='utf-8') as f:
    content = f.read()

pattern = r'\.letters-loading:nth-child\(4\)\s*\{\s*margin-right:\s*clamp\([^)]+\);\s*\}'
content = re.sub(pattern, '', content)

with io.open('assets/css/main.css', 'w', encoding='utf-8') as f:
    f.write(content)
