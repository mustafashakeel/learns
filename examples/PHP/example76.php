<?php // Recipe 76: Search Yahoo!

require_once('../WDC.php');


$search  = "climate change";
$results = SearchYahoo($search, 1, 10);
echo "<font face='Arial' size='2'>Searching Yahoo! for: " .
     "<b>$search</b>:<br /><br />";

if (!$results[0]) echo "No matching results found for $search.";
else
   foreach($results[1] as $result)
      echo "<a href='$result[3]'>$result[0]<a/><br />".
           "$result[1]<br />" .
           "<font color='green'>$result[2]</font><br /><br />";

?>

<br /><br />Note that the
<a href='http://developer.yahoo.com/search/boss/' target='_blank'>Yahoo Search API</a>
is no-longer free, so this example will now work only if you replace the API key shown
in the SearchYahoo() function stored in WDC.php with your own API key registered for
use with the paid service. WIthout a valid key no results will be returned anymore.
