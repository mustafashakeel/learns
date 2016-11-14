<?php

require_once('../WDC.php');

if (CheckCaptcha($_POST['captcha'], $_POST['token'],
   '!*a&K', '.fs£!+')) echo "Captcha verified";
else echo "Captcha failed";

?>