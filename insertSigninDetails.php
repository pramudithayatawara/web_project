<!--create data in the data base -->

<?php

  // create date base connection
  require_once "./DB_Connection.php";


$name = $_POST["uname"];
$userAddress = $_POST["uaddress"];
$userContact = $_POST["ucontact"];
$userEmail= $_POST["uemail"];
$userDOB = $_POST["udate"]; 
$userName = $_POST["userName"];
$userPassword = $_POST["upassword"]; 

$sql = "INSERT INTO createnewaccount VALUES ('' , '$name', '$userAddress','$userContact','$userEmail','$userDOB','$userName','$userPassword')";

if($conn -> query($sql))
{
    echo "<script>
      alert('Created Your Account Successfully..!');
    </script>";
    echo "<script>window.location.href='./index.php';</script>";  
}
else
{
    echo "Error" .$con -> error;
}


$conn -> close();





?>