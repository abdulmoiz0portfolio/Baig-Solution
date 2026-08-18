import io

with io.open('footer.php', 'r', encoding='utf-8') as f:
    content = f.read()

old_footer_logo = '<img src="assets/img/logo/automatixes-logo.svg" alt="Automatixes" style="height: 48px; border-radius: 8px; mix-blend-mode: lighten;">'
new_footer_logo = '<img src="assets/img/logo/automatixes-logo-new.png" alt="Automatixes" style="height: 48px; object-fit: contain;">'

old_modal_logo = '<img src="assets/img/logo/automatixes-logo.svg" alt="Automatixes Logo" style="width: 48px; height: 48px; object-fit: cover; border-radius: 12px; mix-blend-mode: darken; border: 1px solid rgba(0,0,0,0.1); display: block; margin: 0 auto;">'
new_modal_logo = '<img src="assets/img/logo/automatixes-icon.png" alt="Automatixes Logo" style="width: 64px; height: 64px; object-fit: contain; display: block; margin: 0 auto; margin-bottom: 10px;">'

content = content.replace(old_footer_logo, new_footer_logo)
content = content.replace(old_modal_logo, new_modal_logo)

with io.open('footer.php', 'w', encoding='utf-8') as f:
    f.write(content)
