<?php // Recipe 98: Corner Gif

require_once('../WDC.php');

$corner  = $_GET['c'];
$border  = $_GET['b'];
$bground = $_GET['f'];

$result = CornerGif($corner, $border, $bground);
if ($result)
{
   header('Content-type: image/gif');
   imagegif($result);
}

?>
