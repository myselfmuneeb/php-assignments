<?php
// Single Inheritance

class Father{  // Parent Class
  public $a;
  public $b;
  function setValue($x , $y){
    $this->a = $x;
    $this->b = $y;
  }
}
class Child extends Father{   // Child Class
  function getValue(){
    echo "Value Of A : $this->a <br>";
    echo "Value Of B : $this->b";
  }
}
$obj = new Child;
$obj->setValue(23 , 25);
$obj->getValue();

?>