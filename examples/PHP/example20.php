<?php // Recipe 20: Image Watermark

require_once('../WDC.php');

ImageWatermark("pic.jpg", "wmark.png", "png", 75,
   "Watermark", "oldenglish.ttf", 90, "ffffff", 10);

echo "<img src='wmark.png'>";

?>
