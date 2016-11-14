<?php

class User{
	private $name;
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

$serialized = serialize($me);

echo "$serialized\r\n";

$new_me = unserialize($serialized);

print_r($new_me);

?>