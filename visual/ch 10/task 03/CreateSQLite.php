<?php

$handle = sqlite_open('test.sqlite');

if($handle == false){
	echo 'There was a problem creating the SQLite database.';
	exit();
}

echo 'Database created.';

?>