<?php // Recipe 7: Text Truncate

require_once('../WDC.php');

$text  = "It was the best of times, it was the worst of times, it was the age of wisdom, it was the age of foolishness, it was the epoch of belief, it was the epoch of incredulity, it was the season of Light, it was the season of Darkness, it was the spring of hope, it was the winter of despair, we had everything before us, we had nothing before us, we were all going direct to heaven.";

echo "$text<br /><br />";
echo TextTruncate($text, 28, "&hellip;") . "<br />";
echo TextTruncate($text, 50, ":-")       . "<br />";
echo TextTruncate($text, 90, " --")      . "<br />";

?>