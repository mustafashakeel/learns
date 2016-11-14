<?php
$xml = '<library>
<book id="0">Anti-Oedipus</book>
<book id="1">A Thousand Plateaus</book>
</library>';

$parser = xml_parser_create();

function onElementOpen($parser, $name, $attributes){
	echo "Element opened: $name.<br />";
}

function onElementClose($parser, $name){
	echo "Element closed: $name.<br />";
}

xml_set_element_handler($parser, 'onElementOpen', 'onElementClose');

xml_parse($parser, $xml);
?>