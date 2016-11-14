<?php // Recipe 90: Predict Word

require_once('../WDC.php');

echo "<form method='post'>";
echo PredictWord("name='word' type='text'", 5, 20);
echo "<input type='submit'></form>\n";

?>
