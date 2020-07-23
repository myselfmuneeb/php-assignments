<?php

   //// Multi Lavel Inheritance ...

  class Father{
    public $a;
    public $b;
    public $c;
    public $sum;
  }

  class Son extends Father{
    function setValue($x , $y , $z){
      $this->a = $x;
      $this->b = $y;
      $this->c = $z;
      $this->sum = $this->a + $this->b + $this->c;
    }
  }

  class Grandson extends Son {
    function display(){
      echo "Value Of A : $this->a <br>";
      echo "Value Of B : $this->b <br>";
      echo "Value Of C : $this->c <br>";
      echo "Value Of Sum : $this->sum <br>";

    }
  }
  $obj = new Grandson;
  $obj->setValue(10 , 20 , 30);
  $obj->display();

?>