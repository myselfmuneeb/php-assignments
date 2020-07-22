<?php
  $name = "Muneeb";
  $gender = "Male";
  $email = "Muneebbutt444@gmail.com";
  class User{
    private $name;
    private $gender;
    private $email;

    public function setName($name){
      $this->name = $name;
    }
    public function getName(){
      return $this->name;
    }

    public function setGender($gender){
      $this->gender = $gender;
    }
    public function getGender(){
      return $this->gender;
    }

    public function setEmail($email){
      $this->email = $email;
    }
    public function getEmail(){
      return $this->email;
    }
  }

  $user_obj = new User;
  $user_obj->setName($name);
  $user_obj->setGender($gender);
  $user_obj->setEmail($email);
  echo "Name : " . $user_obj->getName() . "<br>";
  echo "Gender : " . $user_obj->getGender() . "<br>";
  echo "Email : " . $user_obj->getEmail() . "<br>";

?>