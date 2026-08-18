from PIL import Image

img_path = r'C:\Users\Moiz Baig\.gemini\antigravity\brain\26596035-7da0-4b63-9054-92fccbae5680\.user_uploaded\media_1787087085198.png'
img = Image.open(img_path).convert('RGBA')

w, h = img.size

# Let's map alpha channel
for y in range(0, h, h//20):
    line = ""
    for x in range(0, w, w//40):
        r, g, b, a = img.getpixel((x, y))
        if a == 0:
            line += "."
        elif g > r and g > b and g > 150:
            line += "G"
        else:
            line += "#"
    print(line)
