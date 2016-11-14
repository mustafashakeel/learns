<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Control Program Flow Using Conditional Statements</title>
</head>
<body>
<?php
	$chosenLotteryNumbers = '123456';

	$winningLotteryNumbers = '654321';

	if($chosenLotteryNumbers == $winningLotteryNumbers){
		$celebrate = true;
	}else{
		$celebrate = false;
	}

	if($celebrate){
		echo 'I Won the Lottery!';
	}else{
		echo 'Maybe next time...';
	}
?>
</body>
</html>
