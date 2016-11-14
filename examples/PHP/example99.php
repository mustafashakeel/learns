<?php // Recipe 99: Rounded Table

require_once('../WDC.php');

$contents = "<b>Macbeth Act 5, scene 5, 19-28</b><br />" .
            "<i>&quot;Tomorrow, and tomorrow, and tomorrow, " .
            "creeps in this petty pace from day to day, to " .
            "the last syllable of recorded time; and all our " .
            "yesterdays have lighted fools the way to dusty " .
            "death. Out, out, brief candle! Life's but a " .
            "walking shadow, a poor player, that struts and " .
            "frets his hour upon the stage, and then is heard " .
            "no more. It is a tale told by an idiot, full of " .
            "sound and fury, signifying nothing.&quot</i>";

echo RoundedTable('', '', 'dedede', '444444', $contents,
   'corner.php');
   
?>
