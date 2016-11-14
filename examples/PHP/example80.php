<?php // Recipe 80: Convert Currency

require_once('../WDC.php');

$amount = 100;
$from   = 'EUR';
$to     = 'JPY';

$result = ConvertCurrency(100, $from, $to);
if (!$result) echo "Conversion failed.<br /><br />";
else echo "$amount $from is $result $to<br /><br />";

$from   = 'GBP';
$to     = 'USD';

$result = ConvertCurrency(100, $from, $to);
if (!$result) echo "Conversion failed.";
else echo "$amount $from is $result $to";

?>
