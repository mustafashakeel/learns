<?php // Recipe 32: Validate Credit Card

require_once('../WDC.php');

$card   = "4567 1234 5678 9101";
$exp    = "06/11";
echo "Validating: $card : $exp<br>";
$result = ValidateCC($card, $exp);
if ($result != FALSE) echo "Card Validated";
else echo "Card did not validate";

?>
