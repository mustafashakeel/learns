<?php // Recipe 43: Auto Back Links

require_once('../WDC.php');

$logfile = "refer.log";
echo "Referring URLs in logfile '$logfile':<br /><br />";

$results = AutoBackLinks($logfile);
if (!$results[0]) echo "No referring URLs";
else foreach ($results[1] as $result)
{
   $title = GetTitleFromURL($result);
   echo "<a href='$result'>";
   echo $title ? $title : $result;
   echo "</a><br />";
}

?>
