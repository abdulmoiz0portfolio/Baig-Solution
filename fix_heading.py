import io

for filename in ['index.php', 'index.html']:
    with io.open(filename, 'r', encoding='utf-8') as f:
        content = f.read()

    content = content.replace('AIAgents vs AIAutomations', 'AI Agents vs AI Automations')
    
    with io.open(filename, 'w', encoding='utf-8') as f:
        f.write(content)
