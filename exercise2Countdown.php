<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
<form action="countdown.php" method="POST">
<label for="">Countdown from:</label>
<input type="text" name="number">
<input type="submit" value="start">
</form>
<br>
</body>
</html>

<?php
$number = $_POST["number"];

while($number >=0 ){
 echo $number . "<br>";
 $number--;
}
?>
