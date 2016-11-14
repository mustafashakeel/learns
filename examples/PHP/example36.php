<?php // Recipe 36: Validate Email

require_once('../WDC.php');

$email  = "paul.smith@smithandson.com";
$result = ValidateEmail($email);
echo "The email address: '$email' ";
echo $result ? "validates" : "does not validate";

$email  = "jdoe@usacom";
$result = ValidateEmail($email);
echo "<br />The email address: '$email' ";
echo $result ? "validates" : "does not validate";

?>
