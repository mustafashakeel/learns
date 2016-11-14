<?php // Recipe 8: Spell Check

require_once('../WDC.php');

$text = "It was the best of tmes, it was the wrst of times, it was the age of wisdom, it was the age of foolishnes, it was the epoch of beleif, it was the epoch of incredulity, it was the season of Light, it was the season of Darkness, it was the spring of hope, it was the winter of despare, we had everything before us, we had nothing before us, we were all going drect to heaven.";

echo "$text<br /><br />";
echo SpellCheck($text, "u");

?>