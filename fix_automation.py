import io

for filename in ['index.php', 'index.html']:
    with io.open(filename, 'r', encoding='utf-8') as f:
        content = f.read()

    target = '<li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-accent-brand mt-1 me-3 flex-shrink-0"></i> <span>Custom AI Voice & Chat Agents</span></li>'
    replacement = target + '\n                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-accent-brand mt-1 me-3 flex-shrink-0"></i> <span>Chatbots (WhatsApp, Instagram, Telegram)</span></li>'

    content = content.replace(target, replacement)
    
    with io.open(filename, 'w', encoding='utf-8') as f:
        f.write(content)
