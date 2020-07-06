<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body{
      background-color : #696868;
      color : white;
      text-align : center;
    }
    h2{
      color :#bfbfbf;
    }
  </style>
  <title>FORM</title>
</head>
<body>
  <form action="test.php" method = "POST" enctype = "multipart/form-data">
    <h1><u>SUBMIT FORM</u></h1>

    <h2>Your Name :</h2>
    <input type="text" name = "name"><br>

    <h2>Chose Programing Language :</h2>
    PHP : <input type="checkbox" value = "PHP" name = "check1">
    JAVA : <input type="checkbox" value = "JAVA" name = "check2">
    JSP : <input type="checkbox" value = "JSP" name = "check3"><br>

    <h2>Chose Your Gender</h2>
    Male : <input type="radio" value = "Male" name = "gender">
    Female : <input type="radio" value = "famale" name ="gender"><br>

    <h2>Select Your Language</h2>
    <select name="lang[]" multiple>
      <option value="Urdu">Urdu</option>
      <option value="English">English</option>
      <option value="Punjabi">Punjsbi</option>
      <option value="Hindi">Hindi</option>
    </select><br>

    <h2>Enter Fmaily Names :</h2>
    <textarea name="family" cols="20" rows="4">
1:    
2:
3:
    </textarea><br>

    <h2>Date Of Birth : </h2>
    <input type="date" name="date" value = "<?php echo date('d-m-Y'); ?>"><br>

    <h2>Upload File</h2>
    <input type="file" name="file"><br>

    <input type="submit" value = "Submit" name = "submit">
  </form>
</body>
</html>