from PIL import Image
import sys

img_path = r'C:\Users\Moiz Baig\.gemini\antigravity\brain\26596035-7da0-4b63-9054-92fccbae5680\.user_uploaded\media_1787087085198.png'
img = Image.open(img_path).convert('RGB')
w, h = img.size

# Let's print a 20x20 ascii map of the image to see where the dark/green parts are
for y in range(0, h, h//20):
    line = ""
    for x in range(0, w, w//40):
        r, g, b = img.getpixel((x, y))
        if r > 240 and g > 240 and b > 240:
            line += "." # white
        elif g > r and g > b and g > 150:
            line += "G" # green
        elif r < 100 and g < 100 and b < 100:
            line += "#" # dark
        else:
            line += "O" # other
    print(line)
