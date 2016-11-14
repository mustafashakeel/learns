<?php // Recipe 41: Lookup Links (Formerly Check Links)

require_once('../WDC.php');

$url    = "http://html5formobile.com";
$links  = array("http://robinnixon.com",
                "http://lpmj.net",
                "http://doesnotexist.com/index.html");

echo "<b>Verifying '$url' for these links:</b><br /><br />";
for ($j = 0 ; $j < count($links) ; ++$j)
   echo $links[$j] . "<br />";

$result = LookupLinks($url, $links);
if ($result[0]) echo "<br /><b>All links verified</b>";
else
{
   echo "<br /><b>Verification failed for:</b><br /><br />";
   
   for ($j = 0 ; $j < count($result[1]) ; ++$j)
      echo $result[1][$j] . "<br />";
}

?>
