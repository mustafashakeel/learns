<?php // Recipe 67: Close Session

require_once('../WDC.php');

$result = OpenSession();
$out    = '';

if (!$result[0]) $out .= "Could not open session.<br />";
else
{
   list($handle, $pass, $name, $email) = $result[1];

   $out .= "Retrieving session variables:<pre>";
   $out .= "Handle: $handle\n";
   $out .= "Pass:   $pass\n";
   $out .= "Name:   $name\n";
   $out .= "Email:  $email</pre>";
}

$result = CloseSession();

echo $out;

if ($result == TRUE) echo "Session closed.";
else echo "Session close failed.";

?>
