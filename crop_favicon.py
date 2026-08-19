from PIL import Image

img_path = 'favicon.png'
img = Image.open(img_path)

bbox = img.getbbox()
if bbox:
    cropped = img.crop(bbox)
    cropped.save('favicon.png')
    print('Cropped favicon to:', bbox)
