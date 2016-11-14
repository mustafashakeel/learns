<?php // Recipe 25: Query Highlight

require_once('../WDC.php');

$text = "To be or not to be, that is the question; " .
        "whether 'tis nobler in the mind to suffer " .
        "the slings and arrows of outrageous fortune, " .
        "or to take arms against a sea of troubles, " .
        "and by opposing, end them. To die - to sleep, " .
        "no more; and by a sleep to say we end " .
        "the heart-ache and the thousand natural shocks " .
        "that flesh is heir to - 'tis a consummation " .
        "devoutly to be wish'd.";

echo    "<a href=\"" . $_SERVER['PHP_SELF'] .
        "?q=" . rawurlencode("question of sleep") .
        "\">Click twice to test</a><br />";
echo    QueryHighlight($text, "b");

?>
