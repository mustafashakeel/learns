<?php // Recipe 42: Get Title From URL

require_once('../WDC.php');

$page   = "http://news.yahoo.com";
$result = GetTitleFromURL($page);

if (!$result) echo "The URL '$page' could not be accessed";
else echo "The title of '$page' is:<br /><br /><i>$result</i>";

?>
