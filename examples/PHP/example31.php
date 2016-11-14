<?php // Recipe 31: Evaluate Expression

require_once('../WDC.php');

echo "<font face='Courier New'><pre>";
$s = "TAN(64)";
echo "$s\t\t\t= " . EvaluateExpression($s) . "\n";
$s = "sqrt(77.3) / 99";
echo "$s\t\t= "   . EvaluateExpression($s) . "\n";
$s = "1 + 2 / 3 * 4 - 5";
echo "$s\t= "     . EvaluateExpression($s) . "\n";
$s = "log(100)";
echo "$s\t\t= "   . EvaluateExpression($s) . "\n";
$s = "pi()";
echo "$s\t\t\t= " . EvaluateExpression($s) . "\n";

?>
