<?php

class User{
	public $name;
	private $id;
	public function __construct($name, $id){
		$this->setName($name);
		$this->setId($id);
	}
	public function setName($name){
		$this->name = $name;
	}
	public function getName(){
		return $this->name;
	}
	public function setId($id){
		$this->id = $id;
	}
	public function getId(){
		return $this->id;
	}
}

$me = new User('Toby Boudreaux', 'tobyjoe', 1001);

$classes = get_declared_classes();

$methods = get_class_methods(get_class($me));

echo 'Classes: ';
print_r($classes);

echo 'Methods: ';
print_r($methods);

?>