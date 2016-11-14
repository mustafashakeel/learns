<?php // Recipe 78: Get Yahoo! News

require_once('../WDC.php');

$search = "climate change";

echo '<html><head><meta http-equiv="Content-Type" ' .
     'content="text/html; charset=utf-8" /></head><body>';
echo '<font face="Verdana" size="2">';
echo "<font face='Arial' size='2'>Recent news results " .
     "for: <b>$search</b>:<br /><br />";

$results = GetYahooNews($search);

if (!$results[0]) echo "No news found for $search.";
else
   foreach($results[1] as $result)
      echo "<a href='$result[4]'>$result[0]</a> ($result[1], " .
           "$result[2])<br />$result[3]<br /><br />";

?>
