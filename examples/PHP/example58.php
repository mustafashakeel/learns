<?php // Recipe 58: Get Tweets

require_once('../WDC.php');

$user   = 'eminem';
$result = GetTweets($user);

echo "Viewing '$user':<br /><ul>";

if (!$result[0]) echo 'Failed';
else
   for ($j = 0 ; $j < $result[0] ; ++$j)
      echo "<li>" . $result[1][$j] . "</li>";

?>
