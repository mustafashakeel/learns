<?php // Recipe 97: Google Translate

require_once('../WDC.php');

$result = AnagramFinder('angriest', 'dictionary.txt');

echo "<h3>Anagrams of <b>angriest</b> are:</h3><ol>";

for ($j = 0 ; $j < count($result) ; ++$j)
	echo "$result[$j] ";

?>
