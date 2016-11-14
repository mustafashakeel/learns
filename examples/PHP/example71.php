<?php // Recipe 71: Create Google Chart

require_once('../WDC.php');

$title   = 'My Favorite Types of Cheese';
$tcolor  = 'FF0000';
$tsize   = '20';
$type    = 'pie3d';
$width   = '570';
$height  = '230';
$bwidth  = NULL;
$labels  = 'Stilton|Brie|Swiss|Cheddar|Edam|Colby|Gorgonzola';
$legends = $labels;
$colors  = 'BD0000,DE6B00,284B89,008951,9D9D9D,A5AB4B,8C70A4,' .
   'FFD200';
$bgfill  = 'EEEEFF';
$border  = '2';
$bcolor  = '444444';
$data    = '14.9,18.7,7.1,47.3,6.0,3.1,2.1';
$result  = CreateGoogleChart($title, $tcolor, $tsize,
   $type, $bwidth, $labels, $legends, $colors, $bgfill,
   $border, $bcolor, $width, $height, $data);

header('Content-type: image/png');
imagepng($result);

?>
