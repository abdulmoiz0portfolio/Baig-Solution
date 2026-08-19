import io

with io.open('footer.php', 'r', encoding='utf-8') as f:
    content = f.read()

# Add a style specifically to protect the ElevenLabs widget from interference
style = '''
    <style>
        /* Isolate and protect ElevenLabs widget */
        elevenlabs-convai {
            z-index: 2147483646 !important; /* Extremely high, just under our sticky button */
            pointer-events: auto !important;
            position: fixed !important;
            bottom: 20px !important;
            right: 80px !important; /* Move it slightly left so it doesn't perfectly overlap others */
        }
    </style>
'''

# insert it before the widget
target = '<!-- ElevenLabs Voice Widget -->'
content = content.replace(target, style + '\n      ' + target)

with io.open('footer.php', 'w', encoding='utf-8') as f:
    f.write(content)
