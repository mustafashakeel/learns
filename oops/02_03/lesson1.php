<?php 

$handle = sqlite_open('test.sqlite');


if($handle == false){
	echo 'there was a problem with the database creation ';
	exit();
}

echo 'Database created';


?>