<?php
/// Hierarchical Inheritance ....

class Father{
  public $a;
  public $b;
  function setValue($x , $y){
    $this->a = $x;
    $this->b = $y;
  }
}
class Son extends Father{
  function add(){
    return $this->a + $this->b;
  }
  function display(){
    echo "Value Of A : $this->a <br>";
    echo "Value Of B : $this->b <br>";
    echo "ADD : " . $this->add() . "<br>";
  }
}
class Daughter extends Father {
  function multi(){
    return $this->a * $this->b;
  }
  function display(){
    echo "Value Of A : $this->a <br>";
    echo "Value Of B : $this->b <br>";
    echo "MULTI : " . $this->multi() . "<br>";
  }
}
$objs = new Son;
$objd = new Daughter;
$objs->setValue(20 , 20);
$objs->display();
$objd->setValue(10 , 10);
$objd->display();


?>