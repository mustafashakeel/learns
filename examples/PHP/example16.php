<?php // Recipe 16: Image Enlarge

require_once('../WDC.php');

$image = imagecreatefromjpeg("icon.jpg");

$image1 = ImageResize($image, 285, 214);
imagejpeg($image1, "icon2.jpg");

$image1 = ImageEnlarge($image, 285, 214, 15);
imagejpeg($image1, "icon3.jpg");

echo "<img src='icon.jpg' align='left'>This is a 100 x 75 ";
echo "pixel icon. Below the icon has been enlarged to 285 x ";
echo "214 pixels using the Image Resize plug-in on the left ";
echo "and Image Enlarge on the right. The left image is ";
echo "clearly pixelated while the right one is smoother.";
echo "<br clear='left' /><img src='icon2.jpg' /> ";
echo "<img src='icon3.jpg' />";

?>
