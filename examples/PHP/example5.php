<?php // Recipe 5: Word Selector

require_once('../WDC.php');

$words = array("the", "this", "that", "is", "these");
$text  = "We hold These truths to be self-evident, that all men are created equal, that they are endowed by their Creator with certain unalienable Rights, that among these are Life, Liberty and the pursuit of Happiness.";

echo WordSelector($text, $words, "u") . "<br /><br />";
echo WordSelector($text, $words, "****");

?>