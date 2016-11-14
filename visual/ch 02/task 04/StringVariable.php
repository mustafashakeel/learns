<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Create a String Variable</title>
</head>
<body>
<?php
	$myVariable = 'This is a single quoted string.';

	echo "$myVariable<br />";

	$myName = " Mustafa Shakeel Qureshi";

	echo $myName;

	define('city','Coquitlam');

	echo '<br/>'.city.'<br/>';

	$state = 'BvC';
			switch($state){
				case 'AL':
						echo "ALBERTA";
						break;
				case 'BC':
						echo " British Columbia ";
						break;

				default :
				echo " Dont know the info ";
			}
?>
</body>
</html>
