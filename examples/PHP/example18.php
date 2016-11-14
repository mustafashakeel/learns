<?php // Recipe 18: Image Convert

require_once('../WDC.php');

ImageConvert("photo.jpg", "photo4.png", "png", 0);

echo "A 42Kb jpeg converted to a png of 8Kb (20% of ";
echo "original) at a quality setting of 25...<br />";
echo "<img src='photo.jpg' align='left'> <img src='photo4.png'>";

?>
