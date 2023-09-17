<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <h1>Get the hypotenuse given 2 sides</h1>
<form action="exercise6Function.php" method="POST">
 <label for="">Please input side a:</label>
 <input type="text" name="sideA"><br>
 <label for="">Please input side b:</label>
 <input type="text" name="sideB"><br>
 <input type="submit" name="Calculate" value="Calculate" >
</form>
</body>
</html>
<?php
function getHypotenuse($a,$b){
 return sqrt($a**2 + $b **2);
}
$a = $_POST["sideA"];
$b = $_POST["sideB"];

if(isset($_POST["Calculate"])){

 if(empty($_POST["sideA"]) && empty($_POST["sideB"])){
  echo "Please enter side A and side B";
 }elseif(empty($_POST["sideA"])){
  echo "Please enter side A";
 }elseif(empty($_POST["sideB"])){
  echo "Please enter side B";
 }else{
echo "the hypotenuse is:" . getHypotenuse($a,$b);
}
}
?>
