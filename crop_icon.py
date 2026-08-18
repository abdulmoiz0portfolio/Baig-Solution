from PIL import Image

img_path = r'assets\img\logo\automatixes-logo-new.png'
img = Image.open(img_path)
w, h = img.size

# We want to crop just the "A" logo part. It is at the top.
# The text is at the bottom (y > 180 roughly).
# Let's crop x: 80 to 280, y: 0 to 180
icon = img.crop((60, 0, 300, 180))
icon.save(r'assets\img\logo\automatixes-icon.png')
print("Icon cropped!")
