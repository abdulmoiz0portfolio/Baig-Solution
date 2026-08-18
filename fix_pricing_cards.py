import io

for filename in ['index.php', 'index.html']:
    with io.open(filename, 'r', encoding='utf-8') as f:
        content = f.read()
    
    content = content.replace('style="box-shadow: 0 15px 40px rgba(200, 224, 25, 0.1); border: 2px solid var(--accent-neon) !important; transform: scale(1.05); z-index: 2;"', 
                              'class="card pricing-card scale-lg-up h-100 bg-surface rounded-4 p-4 p-lg-5 position-relative text-center d-flex flex-column" style="box-shadow: 0 15px 40px rgba(200, 224, 25, 0.1); border: 2px solid var(--accent-neon) !important;"')
                              
    # Clean up duplicate class attributes created by the replace
    content = content.replace('class="card pricing-card h-100 bg-surface rounded-4 p-4 p-lg-5 position-relative text-center d-flex flex-column" class="card pricing-card scale-lg-up', 'class="card pricing-card scale-lg-up')
    
    # Update title
    content = content.replace('<h3 class="h4 fw-bold text-white mb-2">Commercial Products</h3>', '<h3 class="h4 fw-bold text-white mb-2">Digitized Commercial Products</h3>')

    with io.open(filename, 'w', encoding='utf-8') as f:
        f.write(content)
