<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Get Information About a Variable</title>
</head>
<body>
<?php
	if(isset($myVariable)){
		echo "The variable has been set.<br />";
	}else{
		echo "The variable has not been set. Setting a default value.<br />";
		$myVariable = 100;
	}

	echo $myVariable/2;
?>
</body>
</html>
