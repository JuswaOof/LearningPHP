<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>radioButton</title>
</head>
<body>
  <h1>Radio Button</h1>
  <hr>
<form action="exercise4RadioButton.php" method="POST">
  <label for="">Please choose one option</label><br><br>
 <input type="radio" name="credit_card" value="visa">Visa
 <br>
 <input type="radio" name="credit_card" value="mastercard">Mastercard
 <br>
 <input type="radio" name="credit_card" value="American Express">American Express
 <br>
 <input type="submit" name="submit" value="submit"><br><br>
</form>
</body>
</html>

<?php

if(isset($_POST["submit"])){

 $credit_card = null;

 if(isset($_POST["credit_card"])){
  $credit_card = $_POST["credit_card"];
 }

 switch ($credit_card) {
  case 'visa':
   echo "You selected Visa";
   break;
  case 'mastercard':
   echo "You selected Mastercard";
   break;
   case 'American Express':
   echo "You selected American Express";
   break;
  default:
   echo "Please select on option";
   break;
 }
}


?>
