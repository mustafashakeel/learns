<?php

class Child{
	private $age;
	private $favoriteFood;
	public function setAge($age){
		$this->age = $age;
	}
	public function getAge(){
		return $this->age;
	}
	public function setFavoriteFood($food){
		$this->favoriteFood = $food;
	}
	public function getFavoriteFood(){
		return $this->favoriteFood;
	}

	public function __clone(){
		$this->setAge(38);
	}
}

$child = new Child();
$child->setFavoriteFood('tofu');

$clone = clone $child;
echo "The clone likes the food: " . $clone->getFavoriteFood() . "<br />\r\n";
echo "The clone is " . $clone->getAge() . " years old.";

?>


<?php

class Child{
	private $age;
	private
}


?>