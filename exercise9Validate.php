<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <h1>Validate</h1>
 <hr>
<form action="exercise9Validate.php" method="POST">
 <label for="">username:</label><br>
 <input type="text" name="username"><br>
 <label for="">age:</label><br>
 <input type="text" name="age"><br>
 <label for="">email:</label><br>
 <input type="text" name="email"><br><br>
 <input type="submit" name="submit" value="submit" >
 <br><br>
</form>
</body>
</html>
<?php
if(isset($_POST["submit"])){
 $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
 echo "your username is $username <br>";
 $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
 if(empty($age)){
  echo "that is not a valid age <br>";
 }else{
 echo "your age is $age <br>";
 }
 $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
 if(empty($email)){
  echo "that is not a valid email <br>";
 }else{
 echo "your email is $email <br>";
 }

}
?>
