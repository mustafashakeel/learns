<?php // Recipe 39: BB Code

require_once('../WDC.php');

$text = <<<_END
This is a test of BB Code<br /><br />
[size=12]Size 12[/size]
[size=20]Size 20[/size]
[size=32]Size 32[/size]<br />
[i]italic[/i]
[color=red][b]bold red[/b][/color]
[u]underline[/u]
[s]strikethrough[/s]<br />
[url]http://google.com[/url]<br />
[url=http://yahoo.com]A titled hyperlink[/url]<br />
[quote]Block quoted text[/quote]
_END;

echo BBCode($text);

?>
