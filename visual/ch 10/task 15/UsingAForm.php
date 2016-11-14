<?php
	$query = isset($_POST['query']) ? $_POST['query'] : null;
	if($query != null){
		if(get_magic_quotes_gpc()){
			$query = stripslashes($query);
		}
		$query = mysql_real_escape_string($query);
		$handle = mysql_connect('localhost', 'tobyjoe', 'php');
		$db = mysql_select_db('test');
		$result = mysql_query($query);
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Using a Form to Modify a Record</title>
</head>
<body>
<?php
if(is_null($query)){
?>
<form action="UsingAForm.php" method="post">
	<fieldset>
		<textarea name="query"><?php echo $query; ?></textarea>
		<input type="submit" name="submit" value="Execute" />
	</fieldset>
</form>
<?php
}else{
	echo '<p>Success!</p>';
}
?>
</body>
</html>