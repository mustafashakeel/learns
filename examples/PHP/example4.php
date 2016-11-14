<?php // Recipe 4: Strip Whitespace

require_once('../WDC.php');

$text = "      We hold   these truths to be self-evident,       that all men are created equal, that they are endowed by their Creator with certain unalienable     Rights, that among these are Life, Liberty and     the pursuit of Happiness. � That to secure these rights, \n\n \tGovernments are     instituted among Men, deriving their just powers from the consent of the governed, � That whenever any      Form of Government becomes destructive \n \t of these ends, it is the    Right of the People to alter or to abolish it, and to institute new Government, laying its foundation on such principles and      organizing its powers in such form, as to them shall seem most likely to effect their Safety and Happiness.    ";

echo "<textarea cols='68' rows='11'>$text</textarea><br />";
echo StripWhitespace($text);

?>