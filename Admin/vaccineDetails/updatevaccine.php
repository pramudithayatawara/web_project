<?php


  // create date base connection
  require_once "../../DB_Connection.php";


if(isset($_POST["update"])){

    $ID = $_POST["vid"];
    $VaccineName = $_POST["vname"];  // Fixed variable name
    $Quantity = $_POST["vquantity"];
    $supplierName = $_POST["vsname"];
    $country = $_POST["vcountry"];
    
    // Update query
    $sql = "UPDATE vaccine 
            SET vaccName = '$VaccineName', 
                vacQty = '$Quantity', 
                suppliername = '$supplierName', 
                country = '$country' 
            WHERE vaccineID = '$ID' ";
    
    if($conn->query($sql)){
        echo "<script>
            alert('Data updated successfully!');
            window.location.href = 'readvaccine.php';
        </script>";
    } else {
        echo "<script>
            alert('Error updating data!');
        </script>";
    }
}

?>
