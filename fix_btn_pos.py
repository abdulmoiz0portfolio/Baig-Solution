import io

with io.open('footer.php', 'r', encoding='utf-8') as f:
    content = f.read()

# Make sure the button stays 100% inside the viewport to avoid any browser clip/hit-test bugs.
content = content.replace('right: -5px;', 'right: 0px;')
content = content.replace('transform: translateY(-50%) translateX(-5px) !important;', 'transform: translateY(-50%) translateX(-2px) !important;')

with io.open('footer.php', 'w', encoding='utf-8') as f:
    f.write(content)
