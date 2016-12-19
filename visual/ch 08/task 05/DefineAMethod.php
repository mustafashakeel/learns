<?php

class Person{
	public function setName($name){
		echo "The name passed was $name.\r\n";
	}
	private function readDiary(){
		echo "I am reading my diary.\r\n";
	}
}

$p = new Person();
$p->setName('Michele');
$p->readDiary();

?>