<?php

class Stat{
  public static  $id = 1;
  public static $name = "Muneeb";
  public static function sendname(){
    echo "ID : " . self::$id++ . "<br>";
    echo "NAME : " . self::$name . "<br><br>";
    

  }
}
Stat::sendname();
Stat::sendname();
Stat::sendname();

?>