<?php

	$client = new SoapClient(
	'http://www.xmethods.net/sd/2001/TemperatureService.wsdl');

	$temp = $client->getTemp('11222');

	echo "The temperature in Brooklyn is: $temp.";
?>