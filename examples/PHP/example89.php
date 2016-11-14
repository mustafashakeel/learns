<?php // Recipe 89: Words From Root

require_once('../WDC.php');

echo "Root word: test<br /><br />";

$result = WordsFromRoot('test', 'dictionary.txt', 20);

if ($result != FALSE)
   foreach ($result as $word)
      echo "$word<br />";

?>
