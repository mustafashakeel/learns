<?php

function reverse_str($str){
	return strrev($str);
}

$handle = sqlite_open('test.sqlite');

if($handle == false){
	echo 'There was a problem creating the SQLite database.';
	exit();
}

sqlite_create_function($handle, 'rev', 'reverse_str', 1);

$query = 'SELECT rev(name) FROM users';

$result = sqlite_query($handle, $query);

while(sqlite_has_more($result)){
	$row = sqlite_fetch_single($result);
	print_r($row);
}

?>
