<?php

$handle = mysql_connect('localhost', 'tobyjoe', 'php');

echo ($handle) ? "Connected to MySQL.\r\n" : "Could not connect to MySQL.\r\n";

mysql_close($handle);

?>
