<?php // Recipe 29: Hit Counter

require_once('../WDC.php');

HitCounter("testcounter", "reset");

for ($j = 0 ; $j < 5 ; ++$j)
   HitCounter("testcounter", "add");

$result = HitCounter("testcounter", "get");
echo "Raw: $result[0] / Unique: $result[1]<br />";

HitCounter("testcounter", "delete");

?>
<br />
Note that for test purposes, on the <i>webdevelopmentcookbook.com</i> web server
the hit counter data file is not allowed to be deleted. Therefore you will
see an unlink() error when the code is run on this server.
