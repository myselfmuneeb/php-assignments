<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      background-color : gray;
      text-align : center;
      color : white;
    }
  </style>
  <title>Form 2</title>
</head>
<body>
  <?php
    // Retrieve Form Data in same Page 

    if (isset($_POST['name']) && isset($_POST['pass'])) {
      $name = $_POST['name'];
      $pass = $_POST['pass'];
      if (strlen($name) <=5 && strlen($pass) <= 7) {
        echo "<h1 style = 'color : red;'><u>Invalid Data</u></h1>";
      }else{
        echo "USER Name : " . $name .  "<br>";
        echo "PASSWORD : " . $pass ;
      }
    }else{
  ?>
  <form action="" method = "POST">
  <h1>FORM SUBMIT</h1>
  User Name : <input type="text" name="name"><br>
  Password : <input type="password" name="pass"><br>
  <input type="submit" value="Submit" name = "submit">
  </form>
    <?php } ?>
</body>
</html>