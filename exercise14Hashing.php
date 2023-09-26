
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <h1>Hashing</h1>
 <hr>
 <h3>Check if password is correct with the use of hashing</h3>
 <p>The password is "pizza123"</p>
 
 <form action="hashing.php" method="POST">
  <label for="">input password:</label>
  <input type="text" name="checkPassword"><br>
  <input type="submit" name="check" value="check">
 </form>
</body>
</html>

<?php 
$correctPassword = "pizza123";
$hash = password_hash($correctPassword, PASSWORD_DEFAULT);

if(isset($_POST["check"]) && !empty($_POST["checkPassword"])){
if(password_verify($_POST["checkPassword"], $hash)){
echo "Password correct <br>" . "The hash value is {$hash}";
}else{
 echo "Password incorrect";
}
}else{
 echo "Please input password";
}


?>
