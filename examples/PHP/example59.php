<?php // Recipe 59: Replace Smileys

require_once('../WDC.php');

$text = <<<_END
<table width='100%' border='0'><tr><td><pre><center>
angry >:(
blank :|
blush :X
cool  B-)
</center></pre></td><td><pre><center>
cry   :-(
dizzy *-*
happy :-)
kiss  =*
</center></pre></td><td><pre><center>
laugh   :D
puzzled O.o
sad     :(
shocked :o
</center></pre></td><td><pre><center>
sleep  I-)
smiley :)
sneaky :->
tongue :p
</center></pre></td><td><pre><center>
uhoh    =-o
uneasy  :/
wideeye 8)
wink    ;)
</center></pre></td></tr></table>
_END;

echo ReplaceSmileys($text, 'smileys/');

?>
