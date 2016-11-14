<?php

class Animal{
	public function __construct(){
		echo "Animal born.\r\n";
	}
	public function eat($food){
		echo "Animal eats $food.\r\n";
	}
	public function sleep($hours){
		echo "Animal sleeps for $hours hours.\r\n";
	}	
}

class Cat extends Animal{
	public function __construct(){
		parent::__construct();
		echo "Cat born.\r\n";
	}
	public function eat($food){
		echo "Cat eats $food.\r\n";	
	}
	public function sleep($hours){
		echo "Cat sleeps for $hours hours.\r\n";
	}
}

$schmitty = new Cat();
$schmitty->eat('tuna');
$schmitty->sleep(4);

?>