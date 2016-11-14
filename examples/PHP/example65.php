<?php // Recipe 65: Create Session

require_once('../WDC.php');

$handle = "firstprez";
$pass   = "GW022232";
$name   = "George Washington";
$email  = "george@washington.com";
$result = CreateSession($handle, $pass, $name, $email);

if (!$result) echo "Could not create session.";
else
{
   echo 'Session created.<br /><pre>';
   echo 'Testing: $_SESSION[\'handle\'] = ' .
      $_SESSION['handle'];
}

?>
