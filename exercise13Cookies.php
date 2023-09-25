
<?php 
 setcookie("Key", "value", time() + (86400 * 2), "/");
 setcookie("FavFood", "Spaghetti", time() + (86400 * 2), "/");
 setcookie("FavGame", "Dota", time() + (86400 * 2), "/");

 

 if(isset($_COOKIE["FavFood"])){
  echo "Your favorite food is {$_COOKIE["FavFood"]}";
 }else{
  echo "You don't have favorite food";
 }
?>
