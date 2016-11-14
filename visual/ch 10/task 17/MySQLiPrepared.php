<?php

$handle = new mysqli('localhost', 'tobyjoe', 'php');

if($e = mysqli_connect_errno()){
	echo "There was an error: $e.\r\n";
}

$query = "SELECT * FROM user WHERE user_id = ?";

$stmt = mysqli_stmt_bind_param('i', 1001);

if($stmt == false){
	echo "Prepared statement creation failed.\r\n";
}

echo "Prepared statement creation successful.\r\n";

?>