<?php // Recipe 34: Check Captcha

require_once('../WDC.php');

$salt1   = substr(md5(rand()), 0, 5);
$salt2   = substr(md5(rand()), 0, 5);
$result  = CreateCaptcha(26, rand(4,8), 'captcha.ttf',
   'captcha/', $salt1, $salt2);
$captcha = $result[0];
$token   = $result[1];
$image   = $result[2];

echo "The Captcha is '$captcha', the token is:<br />";
echo "'$token', and the image is in:<br />$image:<br />";
echo "<img src=\"$image\"><br />";
ob_flush(); flush(); sleep(2); // Wait for image to display

$guess = "letmein";
$test  = CheckCaptcha($guess, $token, $salt1, $salt2);
if ($test == TRUE) echo "Captcha '$guess' passed<br />";
else echo "Captcha '$guess' failed<br />";

$test = CheckCaptcha($captcha, $token, $salt1, $salt2);
if ($test == TRUE) echo "Captcha '$captcha' passed";
else echo "Captcha '$captcha' failed";

?>
