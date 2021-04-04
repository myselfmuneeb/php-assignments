<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FORM TEST</title>
</head>
<body>
  <?php
  // Retrieve Form Data at Once
  /*
  foreach ($_POST as $key => $value) {
    if (is_array($value)) {
      foreach ($value as $keys => $values) {
        echo $keys . " = " . $values . "<br>";
      }
      }else{
        echo $key . " = " . $value . "<br>";
    }
  }
  */

  if (empty($_POST['name'])) {
    echo "<h1>ENTER YOUR NAME !</h1>"; 
  }else{echo $_POST['name'] . "<br>";}

  if (empty($_POST['check1']) && empty($_POST['check2']) && empty($_POST['check3'])) {
    echo "<h1>ENTER PROGRAMING LANGUAGE YOU WANT !</h1>";
  }else{
    if (isset($_POST['check1'])){
      echo $_POST['check1'] . "<br>";
    }
    if (isset($_POST['check2'])){
      echo $_POST['check2'] . "<br>";
    }
    if(isset($_POST['check3'])){
      echo $_POST['check3'] . "<br>";
    }
  }

  if (empty($_POST['gender'])) {
    echo "<h1>ENTER YOUR GENDER !</h1>";
  }else{
    echo $_POST['gender'] . "<br>";
  }

  if (isset($_POST['lang']))
  {
    foreach ($_POST['lang'] as $lang)
    {
      echo "( $lang )";
    }
  }else{
    echo "<h1>ENTER YOUR LANGUAGE !</h1>";
  }
  echo "<br>";

  $family = $_POST['family'];
  echo str_replace("\n" , "<br>" , $family);
  
  $date = date('d-m-Y' , strtotime($_POST['date']));
  echo "Birthday : " . $date . "<br>";
  
  if (move_uploaded_file($_FILES['file']['tmp_name'] , "images/" . $_FILES['file']['name']))
  {
    echo "File Uplodaded";
  }else{
    echo "<h1>UPLOAD YOUR FILE</h1>";
  }
  ?>
</body>
</html>