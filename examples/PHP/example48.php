<?php // Recipe 48: HTML To RSS

require_once('../WDC.php');

$url         = "http://www.mhprofessional.com/";
$html        = file_get_contents($url);
$title       = "RSS version of '$url'";
$description = "The website '$url' converted to an RSS feed";
$webmaster   = "nobody@nowhere.com";
$copyright   = "Translator Copyright 2009 pluginphp.com";

header('Content-Type: text/xml');
echo HTMLToRSS($html, $title, $description, $url,
   $webmaster, $copyright);

?>
