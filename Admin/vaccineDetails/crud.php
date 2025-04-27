<?php

require '../../DB_Connection.php';


$ID = $_POST["vid"];
$VccineName = $_POST["vname"];
$Quantity = $_POST["vquantity"];
$supplierName = $_POST["vsname"];
$country= $_POST["vcountry"];

//Create Vaccine Details in data base
$sql = "INSERT INTO vaccine VALUES ('' , '$VccineName', '$Quantity','$supplierName','$country')";

if($conn -> query($sql))
{
    echo "<script>
      alert('Added New Vaccine');
    </script>";
    echo "<script>window.location.href='./readvaccine.php';</script>"; 
}
else
{
    echo "Error" .$con -> error;
}


$conn -> close();



?>