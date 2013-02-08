Unpack the zip in your theme folder, then add

require_once("pixelentity-theme-update/class-pixelentity-theme-update.php");
PixelentityThemeUpdate::init($username,$apikey,$author);

to your functions.php where

$username = Buyer Username 
$apikey = Buyer API Key
$author = Your Author Name (as defined in your themes style.css)

The first 2 parameters should be set by the buyer somehow, like in your theme options page.
$author variable can be a single name, like "Pixelentity" or an array of strings. If not set,
all themes purchased by the user on themeforest (even if by different authors) can be updated.

Enjoy!

Pixelentity Team.



