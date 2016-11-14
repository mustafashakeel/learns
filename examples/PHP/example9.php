<?php // Recipe 9: Remove Accents

require_once('../WDC.php');

$text = "Le langage PHP fut créé en 1994 par Rasmus Lerdorf pour son site Web. C'était à l'origine une bibliothèque logicielle en Perl dont il se servait pour conserver une trace des visiteurs qui venaient consulter son CV. Au fur et à mesure qu'il ajoutait de nouvelles fonctionnalités, Rasmus a transformé la bibliothèque en une implémentation en langage C.";

echo "$text<br /><br />";
echo RemoveAccents($text);

?>