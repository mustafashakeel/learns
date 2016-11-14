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

$class = get_class($me);

echo "Class: $class";

echo '<br /><br />Methods: <br />';
print_r(get_class_methods($class));

echo '<br /><br />Vars: <br />';
print_r(get_class_vars($class));

?>