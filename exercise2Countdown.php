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
<input type="submit" name="submit" value="start">
</form>
<br>
</body>
</html>

<?php

$number = 0;

if(isset($_POST["submit"])){
 $number = $_POST["number"];
 echo gettype($number);
 if (is_int($number)) {
    // This block of code will be executed if $number is an integer.
    while($number >=0 ){
    echo $number . "<br>";
    $number--;
}
} else {
    // This block of code will be executed if $number is not an integer.
    echo "please enter number only";
}

}
?>
