<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Create a File Upload Form</title>
</head>
<body>
	<form action="subscribe.php" method="post" enctype="multipart/form-data">
		<fieldset id="photo">
			<input type="hidden" name="MAX_UPLOAD_SIZE" name="5000000" />
			<input type="file" name="photo" />
		</fieldset>
		<fieldset id="controls">
			<input type="submit" name="submit" value="Upload!" />
		</fieldset>
	</form>
</body>
</html>
