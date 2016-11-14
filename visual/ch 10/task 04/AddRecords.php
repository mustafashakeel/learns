<?php

$handle = sqlite_open('test.sqlite');

if($handle == false){
	echo 'There was a problem creating the SQLite database.';
	exit();
}

$query = 'INSERT INTO users (name, password) VALUES ("tobyjoe", "php")';

$result = sqlite_query($handle, $query);

echo ($result) ? "Success - record added.\r\n" : "Failure - record not added.\r\n";

?>
