<?php

$handle = mysql_connect('localhost', 'tobyjoe', 'php');

if($handle == false){
	die("Could not connect to MySQL. Exiting.\r\n");
}

$db = mysql_select_db('test');

if($db == false){
	die("Could not select MySQL DB. Exiting.\r\n");
}

$result = mysql_list_fields('test', 'user', $handle);

if($result == false){
	die("Error with fields listing.\r\n");
}

echo 'Name: ' . mysql_field_name($result, 0) . "<br />\r\n";
echo 'Type: ' . mysql_field_type($result, 0) . "\r\n";

mysql_close($handle);

?>
