<?php

$handle = sqlite_open('test.sqlite');

if($handle == false){
	echo 'There was a problem creating the SQLite database.';
	exit();
}

$query = 'SELECT * FROM users';

$result = sqlite_query($handle, $query);

while(sqlite_has_more($result)){
	$row = sqlite_fetch_single($result);
	print_r($row);
}

?>
