<?php // Recipe 19: Gif Text

require_once('../WDC.php');

GifText("font1.gif", "Old English Font", "oldenglish.ttf",
   26, "ff0000", "ffffff", 1, "444444");
GifText("font2.gif", "Old English Font", "oldenglish.ttf",
   36, "ff0000", "ffffff", 2, "444444");
GifText("font3.gif", "Old English Font", "oldenglish.ttf",
   46, "ff0000", "ffffff", 3, "444444");
GifText("font4.gif", "Old English Font", "oldenglish.ttf",
   56, "ff0000", "ffffff", 4, "444444");

echo "<img src='font1.gif'>";
echo "<img src='font2.gif'>";
echo "<img src='font3.gif'>";
echo "<img src='font4.gif'>";

?>
