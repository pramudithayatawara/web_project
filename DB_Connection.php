<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "Vax_Portal";


$conn = new mysqli($serverName, $userName, $password, $dbName) ;

// check conection
if($conn -> connect_error){
    die("Not success..!".$conn->connect_error);
}
else{
   // echo "Successfully Connected..!";
}


?>