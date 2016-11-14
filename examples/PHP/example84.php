<?php // Recipe 84: Protect Email

require_once('../WDC.php');

$email  = 'billgates@microsoft.com';
$pemail = ProtectEmail($email);
echo      "My email address is $pemail";

?>
