from PIL import Image

img_path = r'C:\Users\Moiz Baig\.gemini\antigravity\brain\26596035-7da0-4b63-9054-92fccbae5680\.user_uploaded\media_1787087085198.png'
img = Image.open(img_path).convert('RGBA')

# Let's print out what we see from y=180 to 250 in x=100 to 500
for y in range(180, 250, 10):
    line = ""
    for x in range(100, 550, 10):
        a = img.getpixel((x, y))[3]
        line += "#" if a > 50 else "."
    print(f"{y}: {line}")
