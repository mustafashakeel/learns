<?php // Recipe 12: Image Resize

require_once('../WDC.php');

echo "Original Image<br /><br /><img src='pic.jpg' /><br /><br />";

$image = imagecreatefromjpeg("pic.jpg");
$newim = ImageResize($image, 500, 100);
imagejpeg($newim, "squashed.jpg");

echo "This image has been resized to 500 x 100 pixels";
echo "<br /><br /><img src='squashed.jpg'>";

?>
