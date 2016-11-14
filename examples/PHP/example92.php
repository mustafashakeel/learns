<?php // Recipe 92: Captcha Bypass

require_once('../WDC.php');

$result = BypassCaptcha();
if (!$result) echo "A Captcha <b>should</b> probably be used.";
else echo "A Captcha probably <b>isn't</b> required.";

echo "<br /><a href='$_SERVER[PHP_SELF]'>Now click here</a>";

?>

