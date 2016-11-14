<?php // Recipe 21: Relative To Absolute URL

require_once('../WDC.php');

echo "<font face='Courier New' size='2'><pre>";
$page = "http://site.com/news/current/science/index.html";
$link = "../../prev/tech/roundup.html";
echo "Page: $page<br />Link: $link\n";
echo "Abs:  " . RelToAbsURL($page, $link);

$link = "/sport/index.htm";
echo "\n\nPage: $page<br />Link: $link\n";
echo "Abs:  " . RelToAbsURL($page, $link);

$page = "http://site.com/news/current/science/";
$link = "/sport/index.htm";
echo "\n\nPage: $page<br />Link: $link\n";
echo "Abs:  " . RelToAbsURL($page, $link);

$link = "../../prev/tech/roundup.html";
echo "\n\nPage: $page<br />Link: $link\n";
echo "Abs:  " . RelToAbsURL($page, $link);

?>
