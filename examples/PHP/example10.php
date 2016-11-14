<?php // Recipe 10: Shorten Text

require_once('../WDC.php');

$text = "http://rover.ebay.com/rover/1/711-53200-19255-0/1?type=3&campid=5336224516&toolid=10001&customid=tiny-hp&ext=unicycle&satitle=unicycle";

echo "Before: <a href=\"$text\">$text</a><br /><br />";
echo "After: <a href=\"$text\">" . ShortenText($text, 60, "/-/-/") . "</a>";

?>