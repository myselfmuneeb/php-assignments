<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FORM</title>
</head>
<body>
  <form action="test.php" method = "POST">
    <h1>FORM</h1>

    <span>Your Name :</span><br>
    <input type="text" name = "name"><br>

    <span>Chose Programing Language :</span><br>
    PHP : <input type="checkbox" value = "PHP" name = "check1">
    JAVA : <input type="checkbox" value = "JAVA" name = "check2">
    JSP : <input type="checkbox" value = "JSP" name = "check3"><br>

    <span>Chose Your Gender</span><br>
    Male : <input type="radio" value = "Male" name = "gender">
    Female : <input type="radio" value = "famale" name ="gender"><br>

    <span>Select Your Language</span><br>
    <select name="lang[]" multiple>
      <option value="Urdu">Urdu</option>
      <option value="English">English</option>
      <option value="Punjabi">Punjsbi</option>
      <option value="Hindi">Hindi</option>
    </select><br>

    <textarea name="family" cols="20" rows="4">
1:    
2:
3:
    </textarea><br>

    <span>Date Of Birth : </span>
    <input type="date" name="date" value = "<?php echo date('d-m-Y'); ?>"><br>

    <input type="submit" value = "Submit" name = "submit">
  </form>
</body>
</html>