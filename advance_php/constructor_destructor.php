<?php

 class Student{
   public $rol;
   function __construct(){
     echo "Constructor Working<br>";
   }
 }
 $stu = new Student;

 class Student2{
   public $rol;
   function __construct($enrol){
     echo "In Parameter Constructor Rol No <br>";
     $this->rol = $enrol;
     echo $this->rol;
   }
   function __destruct(){
     echo "<br>Object Trashed";
   }
 }
 $stu2 = new Student2(20);

?>