<?php // Recipe 30: Referer Log

require_once('../WDC.php');

echo "<a href='" . $_SERVER['PHP_SELF'] .
   "'>Click here to create a Referer</a><br /><ul>";
   
RefererLog("refer.log", "add");
$result = RefererLog("refer.log", "get");

for ($j = 0 ; $j < sizeof($result) ; ++$j)
   echo "<li>$result[$j]</li>";

// Uncomment below to delete the log file afterwards
// RefererLog("refererlog", "delete");

?>
