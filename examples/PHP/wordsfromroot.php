<?php // Recipe 89: Words From Root

require_once('../WDC.php');

$out = "";
$max = 5;

if (!isset($_GET['word'])) exit;
if (isset($_GET['max'])) $max = $_GET['max'];

$result = WordsFromRoot($_GET['word'],
   'dictionary.txt', $max);

if ($result != FALSE)
   foreach ($result as $word) $out .= "$word|";

echo substr($out, 0, -1);

?>
