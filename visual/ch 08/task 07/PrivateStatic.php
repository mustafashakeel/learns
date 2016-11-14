<?php

class EmphasisHTMLDecorator{
	static $openingTag = '<em>';
	static $closingTag = '</em>';
	private $string;
	public function __construct($string){
		$this->string = $string;
	}
	public function getString(){
		return self::$openingTag . $this->string . self::$closingTag;
	}
}

$html = 'Hello, world!';
$em = new EmphasisHTMLDecorator($html);

echo 'The opening tag is: ' . htmlspecialchars(EmphasisHTMLDecorator::$openingTag);

?>