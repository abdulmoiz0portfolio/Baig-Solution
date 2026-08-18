import io
import re

for filename in ['index.php', 'index.html']:
    with io.open(filename, 'r', encoding='utf-8') as f:
        content = f.read()

    # The pattern matches the closing </ul>, then any whitespace/newlines, 
    # then the closing </div> for the first card, then the start of the bad Project 2 card
    pattern = r'</ul>\s*</div>\s*<!-- Project 2: AI Agents -->\s*<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="\.4s">\s*<div class="portfolio-card bg-white rounded-4 border p-3 h-100 position-relative shadow-sm text-start" style="transition: transform 0\.35s ease, box-shadow 0\.35s ease, border-color 0\.35s ease;">\s*<a href="ai-automated-solutions" class="btn btn-outline-light btn-lg w-100 fw-bold border-2">Explore Automations <i class="fa-solid fa-arrow-right ms-2"></i></a>\s*</div>\s*</div>'

    replacement = r'''</ul>
                    <a href="ai-automated-solutions" class="btn btn-outline-light btn-lg w-100 fw-bold border-2">Explore Automations <i class="fa-solid fa-arrow-right ms-2"></i></a>
                </div>
            </div>'''
            
    new_content = re.sub(pattern, replacement, content)
    
    with io.open(filename, 'w', encoding='utf-8') as f:
        f.write(new_content)
