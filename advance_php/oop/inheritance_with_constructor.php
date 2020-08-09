<?php

class Father {
  public $a;
  
  function __construct($x){
    $this->a = $x;
    echo "Parent Conctructor IS Running $this->a<br>";
  }
}
class Son extends Father {
  public $b;
  function __construct($x , $y){
   parent::__construct($x);
   $this->b = $y;
   echo "Child Conctructor IS Running $this->b<br>";
  }
}
$obj = new Son(20 ,10);

?>