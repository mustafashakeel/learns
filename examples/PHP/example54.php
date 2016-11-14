<?php // Recipe 54: Post To Chat

require_once('../WDC.php');

if (!isset($_POST['from']))
{
   echo <<<_END
<form method=post action="$_SERVER[PHP_SELF]"><pre>
   From: <input type=text name='from' />
     To: <input type=text name='to' />
Message: <input type=text name='message' />
         <input type=submit value='Post Message' />
</pre></form>
_END;
exit;
}

$from      = $_POST['from'];
$to        = $_POST['to'];
$message   = $_POST['message'];
$maxposts  = 20;
$maxlength = 1024;

$result = PostToChat('chatroom.txt', $maxposts,
   $maxlength, $from, $to, $message, 'off');

echo "<b>First posting of message</b><br />";
echo "Message '$message' from user '$from' to user '$to': <i>";

if ($result == 1)      echo "Successfully posted";
elseif ($result == -1) echo "Not posted (Could not access file)";
elseif ($result == -2) echo "No message to post or illegal '|'";
else                   echo "Not posted due to flooding control";

$result = PostToChat('chatroom.txt', $maxposts,
   $maxlength, $from, $to, $message, 'off');
   
echo "</i><br /><br /><b>Posted again with no flooding control...</b><br />";
echo "Message '$message' from user '$from' to user '$to': <i>";

if ($result == 1)      echo "Successfully posted";
elseif ($result == -1) echo "Not posted (Could not access file)";
elseif ($result == -2) echo "No message to post or illegal '|'";
else                   echo "Not posted due to flooding control";

$result = PostToChat('chatroom.txt', $maxposts,
   $maxlength, $from, $to, $message, 'on');

echo "</i><br /><br /><b>..and with flooding control</b><br />";
echo "Message '$message' from user '$from' to user '$to': <i>";

if ($result == 1)      echo "Successfully posted";
elseif ($result == -1) echo "Not posted (Could not access file)";
elseif ($result == -2) echo "No message to post or illegal '|'";
else                   echo "Not posted due to flooding control";

?>
