<?php

$handle = mysql_connect('localhost', 'tobyjoe', 'php');

if($handle == false){
	die("Could not connect to MySQL. Exiting.\r\n");
}

$db = mysql_select_db('test');

if($db == false){
	die("Could not select MySQL DB. Exiting.\r\n");
}

$query = 'INSERT INTO user (user_name, user_password) VALUES ("toby", PASSWORD("php"))';

$result = mysql_query($query, $handle);

echo ($result) ? "Insert was successful.\r\n" : "Insert was unsuccessful.\r\n";

mysql_close($handle);

?>
