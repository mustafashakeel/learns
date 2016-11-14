<?php // Recipe 95: Pattern Match Word

require_once('../WDC.php');

$word = "S.e..ng";
$result = PatternMatchWord($word, 'dictionary.txt');

if ($result[0] != FALSE)
{
   echo "Matches for <font face='Courier New'>" .
        "'$word'</font>:<br><ul>";
   foreach ($result[1] as $match)
      echo "<li>$match</li>";
}

?>
