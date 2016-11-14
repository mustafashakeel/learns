<?php // Recipe 75: Get Yahoo! Answers

require_once('../WDC.php');

date_default_timezone_set('utc');
$search = "gardening tips";
$result = GetYahooAnswers($search);

if (!$result[0]) echo "No matching questions found for $search.";
else
   foreach($result[1] as $qa)
      echo "<b>$qa[0]</b> (" . date('M \'y', $qa[1]) . ')<br />'.
           "<b>Q.</b> <i>$qa[2]</i><br />" .
           "<b>A.</b> $qa[3]<br />" .
           "<a href='$qa[4]'>Original Question</a><br /><br />";

?>
