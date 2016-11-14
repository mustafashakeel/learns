<?php // Recipe 52: Post To Guest Book

require_once('../WDC.php');

$name    = "E.Presley";
$email   = "all@shookup.com";
$website = "http://heartbreak.hotel.com";
$message = "Don't you step on my Blue suede shoes.";

echo "Name=<i>$name</i>, Email=<i>$email</i>, Website=<i>" .
   "$website</i>, Message=<i>$message</i><br /><br />";
   
$result = PostToGuestBook('guestbook.txt', $name, $email,
   $website, $message);

if     ($result == 1) echo "<b>Message Posted</b><br />";
elseif ($result == 0) echo "<b>Message Ignored</b><br />";
else                  echo "<b>Message Failed</b><br />";

echo "<br />Name=<i>$name</i>, Email=<i>$email</i>, Website=" .
   "<i>$website</i>, Message=<i>$message</i><br /><br />";

$result = PostToGuestBook('guestbook.txt', $name, $email,
   $website, $message);

if     ($result == 1) echo "<b>Message Posted</b><br />";
elseif ($result == 0) echo "<b>Message Ignored</b><br />";
else                  echo "<b>Message Failed</b><br />";

?>
