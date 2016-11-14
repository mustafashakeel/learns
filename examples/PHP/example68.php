<?php // Recipe 68: Secure Session

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

echo $out;

if (SecureSession()) echo "Session is secure.";
else echo "No session (or unsecured: now terminated).";

?>
