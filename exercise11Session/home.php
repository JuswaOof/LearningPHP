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
 <h2>This is the logout page</h2>

 
<form action="home.php" method="POST">
<input type="submit" name="logout" value="logout">
</form>
<hr>

</body>
</html>

<?php
echo "Hi {$_SESSION["username"]} with a password of {$_SESSION["password"]} you can logout and redirect to login page if you press the logout button";

if(isset($_POST["logout"])){
 header("Location: index.php");
session_destroy();
}
?>
