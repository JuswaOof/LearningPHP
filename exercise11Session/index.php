
<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <h1>Session</h1>
<hr>
 <h2>This is the login page</h2>

 
<form action="index.php" method="POST">
<label for="">username:</label>
<input type="text" name="username"><br><br>
<label for="">password:</label>
<input type="password" name="password"><br><br>
<input type="submit" name="submit" value="submit">
</form>
<hr>

</body>
</html>

<?php

if(isset($_POST["submit"])){
 
 if(!empty($_POST["password"]) && !empty($_POST["username"])){
 $_SESSION["username"] = $_POST["username"];
 $_SESSION["password"] = $_POST["password"];

header("Location: home.php");

 }else{
  echo "Please input username and password";
 }
}
?>
