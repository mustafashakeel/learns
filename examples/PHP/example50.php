<?php // Recipe 50: HTML To Mobile

require_once('../WDC.php');

$url    = "http://yahoo.com";
$html   = file_get_contents($url);
$style  = "no";
$images = "yes";

echo HTMLToMobile($html, $url, $style, $images);

?>
