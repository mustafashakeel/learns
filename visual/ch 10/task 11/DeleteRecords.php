<?php

$handle = mysql_connect('localhost', 'tobyjoe', 'php');

if($handle == false){
	die("Could not connect to MySQL. Exiting.\r\n");
}

$db = mysql_select_db('test');

if($db == false){
	die("Could not select MySQL DB. Exiting.\r\n");
}

$query = 'DELETE FROM user WHERE user_name="tobyjoe"';

$result = mysql_query($query, $handle);

if($result == false){
	die("Error with query.\r\n");
}

$num = mysql_affected_rows($handle);

echo "Affected rows: $num.\r\n";

mysql_close($handle);

?>
