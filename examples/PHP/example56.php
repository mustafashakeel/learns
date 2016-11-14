<?php // Recipe 56: Send Tweet

require_once('../WDC.php');

$user   = 'twitteruser';
$pass   = 'twitterpass';
$text   = 'Check out the Web Development Cookbook';
$result = SendTweet($user, $pass, $text);

if ($result) echo "Tweet '$text' sent";
else echo "Tweet '$text' failed";

?>
<br /><br />
Note that this code uses dummy values for the username and password and
it will therefore fail unless genuine Twitter values are entered.