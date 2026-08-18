import io
import re

for filename in ['index.php', 'index.html']:
    with io.open(filename, 'r', encoding='utf-8') as f:
        content = f.read()

    # We only want to replace the opacity for the hero SVG wrapper divs
    # Find style="top: 25%; left: 8%; z-index: 0; opacity: 0.15;
    content = content.replace('opacity: 0.15;', 'opacity: 0.3;')
    
    with io.open(filename, 'w', encoding='utf-8') as f:
        f.write(content)
