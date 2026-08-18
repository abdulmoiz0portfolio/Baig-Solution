from PIL import Image

img_path = r'C:\Users\Moiz Baig\.gemini\antigravity\brain\26596035-7da0-4b63-9054-92fccbae5680\.user_uploaded\media_1787087085198.png'
img = Image.open(img_path).convert('RGB')
print('Top left pixel:', img.getpixel((0,0)))
print('Center pixel:', img.getpixel((img.width//2, img.height//2)))
