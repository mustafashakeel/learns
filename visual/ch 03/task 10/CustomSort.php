<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Sort Using a Custom Sort Function</title>
</head>
<body>
<?php
	$years = array(2002, 2004, 1977, 1492, 1905, 2001, 1979, 1958);

	function leapYearsFirst($a, $b){
		$aIsLeap = ($a % 4 == 0);
		$bIsLeap = ($b % 4 == 0);
		if(($aIsLeap && $bIsLeap) || (!$aIsLeap && !$bIsLeap)){
			if($a < $b) return -1;
			if($a == $b) return 0;
			if($a > $b) return 1;
		}else if($aIsLeap){
			return -1;
		}else if($bIsLeap){
			return 1;
		}
	}

	usort($years, leapYearsFirst);

	print_r($years);
?>
</body>
</html>
