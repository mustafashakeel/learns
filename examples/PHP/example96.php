<?php // Recipe 96: Suggest Spelling

require_once('../WDC.php');

$word = 'spenr';
echo "Suggested spellings for '$word':<br /><ul>";

$results = SuggestSpelling($word, 'dictionary.txt');
if (!$results[0]) echo "No suggested spellings.";
else foreach ($results[1] as $spelling)
   echo "<li>$spelling</li>";

?>
