<?php // Recipe 47: Page Updated

require_once('../WDC.php');

$page     = "http://robinnixon.com";
$datafile = "urldata.txt";
$result   = PageUpdated($page, $datafile);
echo      "<pre>(1st call) The URL '$page' is ";

if     ($result == -1) echo "New";
elseif ($result == 1)  echo "Changed";
elseif ($result == 0)  echo "Unchanged";
else                   echo "Inaccessible";

$result   = PageUpdated($page, $datafile);
echo      "<br />(2nd call) The URL '$page' is ";

if     ($result == -1) echo "New";
elseif ($result == 1)  echo "Changed";
elseif ($result == 0)  echo "Unchanged";
else                   echo "Inaccessible";

?>
