<?php // Recipe 33: Create Captcha

require_once('../WDC.php');

$result = CreateCaptcha(26, 8, 'captcha.ttf', 'captcha/',
   '!*a&K', ".fs£!+");
   
$captcha = $result[0];
$token   = $result[1];
$image   = $result[2];

echo "The Captcha is '$captcha', the token is:<br />";
echo "'$token', and the image is in:<br />$image:<br />";
echo "<img src=\"$image\">";

?>