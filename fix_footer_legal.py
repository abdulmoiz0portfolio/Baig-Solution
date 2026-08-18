import io
import re

with io.open('footer.php', 'r', encoding='utf-8') as f:
    content = f.read()

# 1. Update Logo column to col-lg-3
content = content.replace('<div class="col-lg-4 col-md-6">\n                    <div class="footer-widget">\n                        <a href="index"', 
                          '<div class="col-lg-3 col-md-6">\n                    <div class="footer-widget">\n                        <a href="index"')

# 2. Update Contact Info column to col-lg-2
content = content.replace('<div class="col-lg-3 col-md-6">\n                    <div class="footer-widget">\n                        <h5 class="widget-title">Contact Info</h5>',
                          '<div class="col-lg-2 col-md-6">\n                    <div class="footer-widget">\n                        <h5 class="widget-title">Contact Info</h5>')

# 3. Add Legal section right before Contact Info
legal_section = '''<div class="col-lg-2 col-md-6">
                    <div class="footer-widget">
                        <h5 class="widget-title">Legal</h5>
                        <ul class="list-unstyled footer-menu">
                            <li><a href="privacy">Privacy Policy</a></li>
                            <li><a href="terms">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="footer-widget">
                        <h5 class="widget-title">Contact Info</h5>'''

content = content.replace('<div class="col-lg-2 col-md-6">\n                    <div class="footer-widget">\n                        <h5 class="widget-title">Contact Info</h5>', legal_section)

# 4. Remove the old privacy/terms links from the bottom bar
old_bottom_links = '''<div class="col-md-6 text-center text-md-end mt-2 mt-md-0">
                    <a href="privacy" class="text-muted text-decoration-none me-3">Privacy Policy</a>
                    <a href="terms" class="text-muted text-decoration-none">Terms of Service</a>
                </div>'''
content = content.replace(old_bottom_links, '')

# Adjust the copyright text to be centered since the right links are gone
content = content.replace('<div class="col-md-6 text-center text-md-start">', '<div class="col-12 text-center">')

with io.open('footer.php', 'w', encoding='utf-8') as f:
    f.write(content)
