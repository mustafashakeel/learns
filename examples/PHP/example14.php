<?php // Recipe 14: Image Alter

require_once('../WDC.php');

$image = imagecreatefromjpeg("photo.jpg");
$copy = ImageAlter($image, 12);
imagejpeg($copy, "photo2.jpg");

echo "<img src='photo.jpg' align=left><img src='photo2.jpg'>";

?>
