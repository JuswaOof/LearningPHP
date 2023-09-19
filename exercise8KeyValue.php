<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <h1>Key Value Pair</h1>
 <hr><br>
 <p>USA, JAPAN, INDIA, PHILIPPINES</p>
<form action="keyValue.php" method="POST">
<label for="">Please enter a country</label>
<input type="text" name="search">
<input type="submit" value="Find Capital" name="submit">
</form>
<br>
</body>
</html>

<?php
if(isset($_POST["submit"])){
$country = array("USA"=>"WASHINGTON D.C",
                 "JAPAN"=>"KYOTO",
                 "INDIA"=>"NEW DELHI",
                 "PHILIPPINES"=>"MANILA",);

$capital = $country[$_POST["search"]];

echo $capital;
}

?>
