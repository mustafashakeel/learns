<?php // Recipe 23: Check Links

require_once('../WDC.php');

$page   = "http://html5formobile.com";
echo      "Checking $page<br />\n"; ob_flush(); flush();
$result = CheckLinks($page, 2, 180);

if ($result[0] > 0)
{
   echo "<br />$result[0] failed URLs:<br /><ul>\n";
   
   for ($j = 0 ; $j < $result[0] ; ++$j)
      echo "<li><a href='" . $result[1][$j] .
         "'>" . $result[1][$j] . "</a></li>\n";
}
else echo "<br />All URLs successfully accessed.";

?>
