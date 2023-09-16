<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Count</title>
</head>
<body>
 <h1>Count number</h1>
 <hr>
<form action="exercise3CountUp.php" method="POST">
<label for="">Count up to:</label>
<input type="text" name="number">
<input type="submit" name="submit" value="start">
</form>
<br>
</body>
</html>

<?php

$counter = 1;



if(isset($_POST["submit"])){
 $number = $_POST["number"];

 $integerValue = intval($number);

if ($integerValue !== 0 || $integerValue === 0 && $number === "0") {
    while($counter <= $number ){
 echo $counter . "<br>";
 $counter++;
}
} else {
    echo "please enter number only";
}
}
?>
