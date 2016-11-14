<?php
class User{
	private $name;
	private $id;
	private $friends;
	public function __construct($name, $id){
		$this->setName($name);
		$this->setId($id);
		$this->friends = array();
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
	public function getFriends(){
		return $this->friends;
	}
	public function setFriends(){
		$this->friends = getFriends($this);
	}
}
function getFriends($user){
	echo "Looking up all friends of the user with id: " . $user->getId() . "\r\n";
	return array('Michele', 'Jon', 'Chandler', 'David');
}
$me = new User('Toby Boudreaux', 'tobyjoe', 1001);
$me->setFriends();
print_r($me->getFriends());
?>