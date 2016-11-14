<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Process Multiple Form Selections</title>
</head>
<body>
	<form id="userInfo" action="subscribe.php" method="post">
		<fieldset id="contactInfo">
			<input type="text" name="email" value="Type Your Email" />
		</fieldset>
		<fieldset id="interests">
			<input type="checkbox" name="interests[]" value="photography" />
			Photography
			<input type="checkbox" name="interests[]" value="cycling" />
			Cycling
			<input type="checkbox" name="interests[]" value="programming" />
			Programming
		</fieldset>
		<fieldset id="controls">
			<input type="submit" name="submit" value="Sign Up!" />
		</fieldset>
	</form>
</body>
</html>
