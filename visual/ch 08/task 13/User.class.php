<?php

class User{
	private $name;
	private $userName;
	private $id;
	public function __construct($name, $userName, $id){
		$this->setName($name);
		$this->setUserName($userName);
		$this->setId($id);
	}
	public function setName($name){
		$this->name = $name;
	}
	public function getName(){
		return $this->name;
	}
	public function setUserName($userName){
		$this->userName = $userName;
	}
	public function getUserName(){
		return $this->userName;
	}
	public function setId($id){
		$this->id = $id;
	}
	public function getId(){
		return $this->id;
	}
}


?>