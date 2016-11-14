<?php // Recipe 37: Spam Catch

require_once('../WDC.php');

$words  = array('rolex', 'replica', 'loan', 'mortgaqe', 'viagra',
                'cialis', 'acai', 'free', 'stock', 'guaranteed',
                'refinancing', 'cartier', 'manhood', 'drugs');

$text   = "Hi there. I enjoyed reading your website and will " .
          "be back for more. Keep up the good work!";
$result = SpamCatch($text, $words);
echo "The text <i>'$text'</i> is ";
echo $result == 0 ? "spam free." : "suspected spam " .
   "(score = $result).";

$text   = "Brand new replica rolex. Guaranteed quality. " .
          "http://replicarolex23.com";
$result = SpamCatch($text, $words);
echo "<br /><br />The text <i>'$text'</i> is ";
echo $result == 0 ? "spam free." : "suspected spam " .
   "(score = $result).";

?>
