# Picture Load

Installation Instructions :

1. Extract the PictureLoad folder from the Picture Load to your desktop or any accessable directories.
2. Transfer the Picture Load folder from step 1 into your web hosting public_html using a ftp client.
3. Get your steam api key at "https://steamcommunity.com/dev/apikey" and copy it
4. Open the file "index.php" and add your api key to line "4" where it says "STEAM API KEY HERE" and save
4. In you server.cfg on your gmod server at = garrysmod\cfg\server.cfg. On a empty line at the bottom of the page put this with the loading screen = sv_loadingurl "http://yourdomainname.com/PictureLoad/index.php"

Optional Instructions :

Music : 
1. To add music convert the music to ".ogg" at 128kpbs bitrate at this website = http://audio.online-convert.com/convert-to-ogg
2. Put the converted music into the music the music folder.
3. Put the music directory in your in index.php file on line 58

Add Backgrounds :
1. Open the images folder naming them 1,2,3,4,5,6,7,8,9, and 0 make sure they are jpg. To add more or remove image slots or use a different image format look at the other "Optional Instructions" below.

Edit logo :
1. Go into the pic folder
2. Open the psd file "logo change to your liking" in photoshop to edit the logo
3. Save it with the name "logo" as a png "because it is partially transparent" in the pic folder 
4. Also if you want to keep the same font go into the font folder and install the font to your computer

Remove logo :
1. Delete the "logo.png" in the pic folder

Remove Backgrounds :
1. Open up the file "index.php"
2. Look for lines 45-54 and remove the backgrounds you don't want they are all named

Change Backgrounds Pictures :
1. Change the background with a "jpg" 1920x1080 image with the the same number as the one you want to replace

For Different Image Formats (The image you replaced the background with isn't jpg)
1. Open style.css
2. Change the format from jpg to The Image that you installed's format

MORE DIFFICULT :

Add Backgrounds To The List :
1. Add the 1920x1080 jpeg image to the images folder. Make sure the picture name is a number that isn't used already.
2. Open the "style.css" with a code editor (notepad++)
3. Make a new line and the bottom of them page and put this "#img0 {background: url('images/0.jpg'); background-size: 100% auto; background-size: cover; width: 100%; height: 100%;}"
4. where it says "#img0" change the 0 to the name of you picture. Example = #img24
5. Change "('images/0.jpg')" with the dirctory of your image and the imgage format type. Example ('images/24.png')
6. Open the file "index.php"
7. Go to line 54 and make a new line and add this code = "<div id="img0"></div>"
8. Replace "img0" with the name of your image

If you need more help make a ticket on scriptfodder my name is "BBCS".
