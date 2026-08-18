from PIL import Image

img_path = r'C:\Users\Moiz Baig\.gemini\antigravity\brain\26596035-7da0-4b63-9054-92fccbae5680\.user_uploaded\media_1787087085198.png'
img = Image.open(img_path).convert('RGBA')

crop_box = (120, 220, 480, 500)
cropped = img.crop(crop_box)

datas = cropped.getdata()
newData = []

for item in datas:
    r, g, b, a = item
    if a > 0:
        # Check if the pixel is mostly grayscale (difference between max and min color is small)
        if max(r,g,b) - min(r,g,b) < 30:
            # It's grayscale (text or shadow). Let's invert it so black becomes white
            newData.append((255 - r, 255 - g, 255 - b, a))
        else:
            # It has color (the green logo). Leave it alone.
            newData.append(item)
    else:
        newData.append(item)

cropped.putdata(newData)
cropped.save(r'assets\img\logo\automatixes-logo-new.png')
print("Logo cropped and text inverted successfully!")
