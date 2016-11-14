<?php

$handle = new mysqli('localhost', 'tobyjoe', 'php');

if($e = mysqli_connect_errno()){
	echo "There was an error: $e.\r\n";
}else{
	echo 'Successful connection.';
}

?>