<?php // Recipe 9: Remove Accents

require_once('../WDC.php');

$text = "Le langage PHP fut cr�� en 1994 par Rasmus Lerdorf pour son site Web. C'�tait � l'origine une biblioth�que logicielle en Perl dont il se servait pour conserver une trace des visiteurs qui venaient consulter son CV. Au fur et � mesure qu'il ajoutait de nouvelles fonctionnalit�s, Rasmus a transform� la biblioth�que en une impl�mentation en langage C.";

echo "$text<br /><br />";
echo RemoveAccents($text);

?>