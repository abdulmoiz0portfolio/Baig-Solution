import io
import re

for filename in ['index.php', 'index.html']:
    with io.open(filename, 'r', encoding='utf-8') as f:
        content = f.read()

    # The current badge
    old_badge = '<div class="position-absolute top-0 start-50 translate-middle badge bg-accent-brand text-dark rounded-pill py-2 px-3 fw-bold shadow-sm" style="font-size: 0.8rem; letter-spacing: 1px;">POPULAR</div>'
    
    # We will remove it
    content = content.replace(old_badge, '')
    
    # And we will insert an in-flow badge inside the mb-4 mt-2 container, right above the robot icon
    target_block = '''<div class="mb-4 mt-2">
                        <div class="bg-brand-translucent text-accent-brand rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 60px; height: 60px; font-size: 24px;">'''
    
    new_block = '''<div class="mb-4 mt-2">
                        <div class="badge bg-accent-brand text-dark rounded-pill py-1 px-3 fw-bold mb-4 shadow-sm" style="font-size: 0.75rem; letter-spacing: 1px;">POPULAR</div>
                        <div class="bg-brand-translucent text-accent-brand rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 60px; height: 60px; font-size: 24px;">'''
    
    content = content.replace(target_block, new_block)
    
    with io.open(filename, 'w', encoding='utf-8') as f:
        f.write(content)
