<?php

$handle = mysql_connect('localhost', 'tobyjoe', 'php');

if($handle == false){
	die("Could not connect to MySQL. Exiting.\r\n");
}

$db = mysql_select_db('test');

if($db == false){
	die("Could not select MySQL DB. Exiting.\r\n");
}

$query = 'SELECT user_name FROM user';

$result = mysql_query($query, $handle);

if($result == false){
	die("Error with query.\r\n");
}

while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
	print_r($row);
}

mysql_close($handle);

?>
