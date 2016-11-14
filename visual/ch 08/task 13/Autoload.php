<?php

function __autoload($className){
	$path = "$className.class.php";
	echo "Autoloading: $path\r\n";
	if(file_exists($path)){
		include($path);
	}
}

$me = new User('Toby Boudreaux', 'tobyjoe', 1001);

?>