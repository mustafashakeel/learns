<?php // Recipe 57: Send Direct Tweet

require_once('../WDC.php');

$user   = 'twitteruser';
$pass   = 'twitterpass';
$to     = 'otheruser';
$text   = 'A test message from twitteruser to otheruser';
$result = SendDirectTweet($user, $pass, $to, $text);

if ($result) echo "Direct Tweet '$text' sent to '$to'.";
else echo 'Tweet failed';

?>
<br /><br />
Note that this code uses dummy values for the username and password and
it will therefore fail unless genuine Twitter values are entered.