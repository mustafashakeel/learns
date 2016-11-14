<?php
class Thing{
	private $props;
	public function __construct(){
		$this->props = array('foo'=>'', 'bar'=>'');
	}
	public function __get($key){
		if(array_key_exists($key, $this->props)){
			return $this->props[$key];		
		}
	}
	public function __set($key, $value){
		if(array_key_exists($key, $this->props)){
			$this->props[$key] = $value;
		}
	}
}

$t = new Thing();

$t->foo = 'hello';
$t->bar = 'world!';
$t->bat = 'not gonna happen.';

echo "Foo: $t->foo.\r\n";
echo "Bar: $t->bar.\r\n";
echo "Bat: $t->bat.\r\n";

?>