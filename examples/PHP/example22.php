<?php // Recipe 22: Get Links From URL

require_once('../WDC.php');

$result = GetLinksFromURL("http://webdevelopmentcookbook.com");

echo "<ul>";
for ($j = 0 ; $j < count($result) ; ++$j)
   echo "<li>$result[$j]</li>";

?>
