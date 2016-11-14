<?php // Recipe 49: RSS To HTML

require_once('../WDC.php');

$url = "http://www.nasa.gov/rss/image_of_the_day.rss";
$rss = file_get_contents($url);
echo   RSSToHTML($rss);


?>
