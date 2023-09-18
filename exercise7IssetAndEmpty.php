<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <h1>Isset and Empty</h1>
 <hr>
 <form action="issetAndEmpty.php" method="POST">
  <label for="">username:</label>
  <input type="text" name="username">
  <br>
  <br>
  <label for="">password:</label>
  <input type="text" name="password">
  <br><br>
  <input type="submit" name="check" value="check">
<br><br>
 </form>
</body>
</html>

<?php

// foreach($_POST as $key => $value){
//  echo "{$key} = {$value} <br>";
// }

if(isset($_POST["check"])){

 $username = $_POST["username"];
 $password = $_POST["password"];

 if(empty($username) && empty($password)){
  echo "please enter username and password";
 }
 else{
 if(empty($username)){
  echo "please input username";
 }elseif(empty($password)){
  echo "please input password";
 }
 else{
  echo "Your username is '{$username}' and your password is '{$password}''";
 }
}
}

?>
