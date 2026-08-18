from PIL import Image

img_path = r'C:\Users\Moiz Baig\.gemini\antigravity\brain\26596035-7da0-4b63-9054-92fccbae5680\.user_uploaded\media_1787087085198.png'
img = Image.open(img_path).convert('RGBA')

w, h = img.size

min_x, max_x = w, 0
min_y, max_y = h, 0

# Scan the left area for the main logo (y between 180 and 550, x between 50 and 550)
for y in range(180, 550):
    for x in range(50, 550):
        r, g, b, a = img.getpixel((x, y))
        if a > 50: # non-transparent
            if x < min_x: min_x = x
            if x > max_x: max_x = x
            if y < min_y: min_y = y
            if y > max_y: max_y = y

print(f"Bounding box for main logo: {min_x}, {min_y}, {max_x}, {max_y}")
