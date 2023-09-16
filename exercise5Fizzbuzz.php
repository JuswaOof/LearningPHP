<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Fizzbuzz</title>
</head>
<body>
 <h1>Fizzbuzz</h1>
 <hr>
<form action="exercise5Fizzbuzz.php" method="POST">
<label for="">Fizzbuzz up to:</label>
<input type="text" name="number">
<input type="submit" name="submit" value="start"><br><br>
</form>
</body>
</html>

<?php

if(isset($_POST["submit"])){
 $number = $_POST["number"];

 $integerValue = intval($number);

if ($integerValue !== 0 || $integerValue === 0 && $number === "0") {
for($i=1; $i<=$number; $i++){
 if($i % 3 == 0 && $i % 5 == 0){
  echo "fizzbuzz <br>";
 }

 else{
   if($i % 3 == 0){
   echo "fizz <br>";
   }
   elseif($i % 5 == 0){
   echo "buzz <br>";
   }
   else{
   echo $i . "<br>";
 }
}
}
} else {
    echo "please enter number only";
}
}



?>
