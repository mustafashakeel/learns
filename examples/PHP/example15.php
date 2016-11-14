<?php // Recipe 15: Image Crop

require_once('../WDC.php');

$image = imagecreatefromjpeg("photo.jpg");
$copy =  ImageCrop($image, 100, 0, 110, 140);

if (!$copy) echo "Crop failed: Argument(s) out of bounds";
else
{
   imagejpeg($copy, "photo3.jpg");
   echo "<img src='photo.jpg' align=left> ";
   echo "Cropped at 100,0<br />with width / height";
   echo "<br />of 110/140 pixels<br /><br />";
   echo "<img src='photo3.jpg'>";
}

?>
