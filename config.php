<?php

$servername="localhost";
$username="root";
$password="";
$dbname="Vax_Portal";

//create connection
$conn= new mysqli($servername,$username,$password,$dbname);

// check the connection
if($conn -> connect_error)
{
  die("connection failed:".$conn->connect_error);
}
else
{
  echo "connection succeeded";
}

?>