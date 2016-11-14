<?php

	$server = new SoapServer('http://localhost/TemperatureService.wsdl');

	function getTemp($zip){
		return 80;
	}

	$server->addFunction('getTemp');

	$server->handle();

?>