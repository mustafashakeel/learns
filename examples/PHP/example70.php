<?php // Recipe 70: Block User By Cookie

require_once('../WDC.php');

$handle = "troll23";
$pass   = "itroll4fun";
$name   = "Ivor Bigun";
$email  = "troll@underbridge.com";
$out    = BlockUserByCookie(NULL, $handle, NULL);
$result = CreateSession($handle, $pass, $name, $email);

if (!$result) $out .= "Could not create session.";
else
{
   $out = 'Session created.<br /><pre>';
   $out = 'Testing: $_SESSION[\'handle\'] = ' .
      $_SESSION['handle'] . '</pre>';

   $result = OpenSession();

   if (!$result[0]) $out = "Could not open session.";
   else
   {
      list($handle, $pass, $name, $email) = $result[1];

      $out = "Retrieving session variables:<pre>";
      $out = "Handle: $handle\n";
      $out = "Pass:   $pass\n";
      $out = "Name:   $name\n";
      $out = "Email:  $email</pre>";
   }
   
   $result = BlockUserByCookie('block', $handle,
      60 * 60 * 24 *365);

   if ($result) $out = "User '$handle' blocked.";
   else         $out = "Blocking was unsuccessful.";
}

echo $out;

?>