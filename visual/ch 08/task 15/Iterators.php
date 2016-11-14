<?php
class SiblingIterator implements Iterator{
  private $obj;
  private $cursor;
  public function __construct($obj){
    $this->obj = $obj;
  }
  public function rewind(){
    $this->cursor=0;
  }
  public function next(){
    $this->cursor++;
  }
  public function current(){
    return $this->obj->getSibling($this->cursor);
  }
  public function hasMore(){
    return ($this->cursor < $this->obj->getSiblingCount());
  }
  public function key(){
    return $this->cursor;
  }
  public function valid(){}
}

class Child implements IteratorAggregate{
  private $siblings = array();
  public function setSiblings($arr){
    $this->siblings = $arr;
  }
  public function getSibling($id){
    return $this->siblings[$id];
  }
  public function getSiblingCount(){
    return count($this->siblings);
  }
  public function getIterator(){
    return new SiblingIterator($this);
  }
}

$c = new Child();
$c->setSiblings(array('Ryan', 'Rob', 'Michele'));
$it = $c->getIterator();

$it->rewind();
while($it->hasMore()){
  $s = $it->current();
  echo "$s<br />\r\n";
  $it->next();
}

?>