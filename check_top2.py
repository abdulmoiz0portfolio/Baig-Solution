from PIL import Image

img_path = r'C:\Users\Moiz Baig\.gemini\antigravity\brain\26596035-7da0-4b63-9054-92fccbae5680\.user_uploaded\media_1787087085198.png'
img = Image.open(img_path).convert('RGBA')

# Let's print out what we see from y=150 to 250 in x=50 to 550
for y in range(150, 250, 10):
    line = ""
    for x in range(50, 550, 10):
        a = img.getpixel((x, y))[3]
        line += "#" if a > 50 else "."
    print(f"{y}: {line}")
