import io

with io.open('assets/css/main.css', 'r', encoding='utf-8') as f:
    content = f.read()

# Restore 800 weight and add text-stroke and translateZ to fix rendering shifts
old_class = '''\.letters-loading {
    font-weight: 700;
    font-size: clamp(24px, 7vw, 55px);
    color: rgba(255, 255, 255, 0.08);
    font-family: var(--font-heading);
    position: relative;
    display: inline-block;
    letter-spacing: clamp(4px, 1.5vw, 12px);
    text-transform: uppercase;
}'''

new_class = '''.letters-loading {
    font-weight: 800;
    font-size: clamp(24px, 7vw, 55px);
    color: rgba(255, 255, 255, 0.08);
    font-family: var(--font-heading);
    position: relative;
    display: inline-block;
    letter-spacing: clamp(4px, 1.5vw, 12px);
    text-transform: uppercase;
    -webkit-text-stroke: 1.5px rgba(255,255,255,0.2);
    transform: translateZ(0);
}'''

import re
content = re.sub(r'\.letters-loading\s*\{[^}]+\}', new_class, content, count=1)

old_before = '''.letters-loading::before {
    content: attr(data-text-preloader);
    position: absolute;
    top: 0;
    left: 0;
    color: var(--accent-neon);
    opacity: 0;
    animation: loadLetter 1.2s infinite;
}'''

new_before = '''.letters-loading::before {
    content: attr(data-text-preloader);
    position: absolute;
    top: 0;
    left: 0;
    color: var(--accent-neon);
    opacity: 0;
    animation: loadLetter 1.2s infinite;
    -webkit-text-stroke: 1.5px var(--accent-neon);
}'''

content = re.sub(r'\.letters-loading::before\s*\{[^}]+\}', new_before, content, count=1)

with io.open('assets/css/main.css', 'w', encoding='utf-8') as f:
    f.write(content)
