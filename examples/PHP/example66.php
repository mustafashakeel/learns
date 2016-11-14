<?php // Recipe 66: Open Session

require_once('../WDC.php');

$result = OpenSession();

if (!$result[0]) echo "Could not open session.";
else
{
   list($handle, $pass, $name, $email) = $result[1];

   echo "Retrieving session variables:<pre>";
   echo "Handle: $handle\n";
   echo "Pass:   $pass\n";
   echo "Name:   $name\n";
   echo "Email:  $email\n";
}

?>
