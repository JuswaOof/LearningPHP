<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <h1>Sanitize</h1>
<form action="exercise10Sanitize.php" method="POST">
 <label for="">username:</label><br>
 <input type="text" name="username"><br>
 <label for="">age:</label><br>
 <input type="text" name="age"><br>
 <label for="">email:</label><br>
 <input type="text" name="email"><br>
 <input type="submit" name="submit" value="submit" >
</form>
</body>
</html>
<?php
if(isset($_POST["submit"])){
 $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
 echo "your username is $username <br>";
 $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
 echo "your age is $age <br>";
 $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
 echo "your email is $email <br>";
}
?>
