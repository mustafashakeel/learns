<?php

$xml = simplexml_load_file('test.xml');

$handle = fopen('output.xml', 'w+');

$data = $xml->asXML();

$result = fwrite($handle, $data);

if($result){
	echo 'Success!';
}else{
	echo 'Failure.';
}

fclose($handle);

?>