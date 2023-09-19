<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
<form action="exercise8KeyValue.php" method="POST">
<label for="">Please enter a country</label>
<input type="text" name="search">
<input type="submit" value="Find Capital">
</form>
<br>
</body>
</html>

<?php
$country = array("USA"=>"WASHINGTON D.C",
                 "JAPAN"=>"KYOTO",
                 "INDIA"=>"NEW DELHI",
                 "PHILIPPINES"=>"MANILA",);

$capital = $country[$_POST["search"]];

echo $capital;

?>
