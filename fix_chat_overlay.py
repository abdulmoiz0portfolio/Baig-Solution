import io

with io.open('footer.php', 'r', encoding='utf-8') as f:
    content = f.read()

# Fix :root styles that might be globally blocking things
content = content.replace('pointer-events: auto !important;\n                overflow: hidden !important;', '')

# Bump the sticky-expert-btn z-index to maximum
content = content.replace('z-index: 999999;', 'z-index: 2147483647;')

with io.open('footer.php', 'w', encoding='utf-8') as f:
    f.write(content)
