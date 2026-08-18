import io

with io.open('header.php', 'r', encoding='utf-8') as f:
    content = f.read()

old_logo = '<img src="assets/img/logo/automatixes-logo.svg" alt="Automatixes Logo" style="width: 180px; height: auto; object-fit: contain; filter: brightness(0) invert(1);">'
new_logo = '<img src="assets/img/logo/automatixes-logo-new.png" alt="Automatixes Logo" style="width: 190px; height: auto; object-fit: contain;">'

content = content.replace(old_logo, new_logo)

with io.open('header.php', 'w', encoding='utf-8') as f:
    f.write(content)
