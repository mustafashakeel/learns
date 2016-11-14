<?php 
$handle = sqlite_open('test.sqlite');
if($handle == false){
	echo ' there is a problem creating the sqlite database ';
	exit();
}
echo ' sqlite database is created';

?>