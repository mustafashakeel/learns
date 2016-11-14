<?php // Recipe 91: Get Country From IP

require_once('../WDC.php');

$ip     = '64.233.191.255';
$result = GetCountryFromIP($ip);

if (!$result) echo "Could not identify location for '$ip'.";
else          echo "The location of '$ip' is: $result.";

?>
