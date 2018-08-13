# webapp
extremely simple webapp enabler for any mobile site

# Requirements
Arguments are sent via php's GET. 

Argument requirements:
* app-name (name of webapp to appear on springboard)
* app-href (address of webapp)
* app-img  (address of image for app icon/background image)
* app-color (background color for app outside image)
* delay (millisecond delay to load app (for ease of adding to home screen))

# Example Usage
`webapp.php?app-name=Milestone&app-href=https://milestone.myfinanceservice.com/&app-img=/apple-touch-icon.png&app-color=#275375&delay=3000`
