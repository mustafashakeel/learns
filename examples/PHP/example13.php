<?php // Recipe 13: Make Thumbnail

require_once('../WDC.php');

$image = imagecreatefromjpeg("pic.jpg");
$thumb = MakeThumbnail($image, 100);
imagejpeg($thumb, "icon.jpg");

$thumb2 = MakeThumbnail($image, 50);
imagejpeg($thumb2, "photo.jpg");

echo <<<_END
Here are the original and thumbnail images:<br /><img
src='pic.jpg' align='left'>&nbsp;&nbsp;<img src='icon.jpg'>
<br /><br />This thumbnail has maximum<br />dimensions of 100
pixels.<br /><br />Here's another with a maximum<br />50 pixels
width and height:<br /><br /><img src='photo.jpg'>
_END;

?>
