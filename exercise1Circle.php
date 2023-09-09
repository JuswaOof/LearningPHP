<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
<form action="exercise1Circle.php" method="POST">
 <label for="radius">radius:</label>
 <input type="text" name="radius">
 <input type="submit" value="calculate">
</form>
</body>
</html>

<?php
$radius = $_POST["radius"];

$circumference = round(2 * pi() * $radius, 2);
$area = round(pi() * $radius ** 2, 2);
$volume = round((4/3) * pi() * $radius ** 3, 2);

echo"circumference: {$circumference} cm<br>
area: {$area} cm^2<br>
volume: {$volume} cm^3"

?>