
<?php 
 $db_server = "localhost";
 $db_username = "root";
 $db_password = "";
 $db_name = "testdb";

 $conn = "";

 try {
    $conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);
} catch (Exception $e) {
    // Handle the exception here, for example, by logging it or displaying an error message.
    echo 'Error: ' . $e->getMessage();
}

?>
