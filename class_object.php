<?php

  class Mobile{
    public $modle; // property
    function showModle ($show_modle){
      $this->modle = $show_modle;
      echo "Mobile Modle Number Is : $this->modle <br>";
    }
  }
  $samsung = new Mobile;
  $samsung->showModle("A8");
  $lg = new Mobile;
  $lg->showModle("G5");

?>