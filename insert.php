<!--include connection file-->
<?php

  require 'config.php'; 

  
  $patientName=$_POST["pname"];
  $patientTpNo=$_POST["ptpno"];
  $patientDate=$_POST["pdate"];
  $patientTime=$_POST["ptime"];
  $patientReason=$_POST["preason"];
  $patientAlagis=$_POST["palagic"];

  $sql="INSERT INTO booking (Name,TpNo,Date,Time,Reason,Alagics) VALUES ('$patientName','$patientTpNo','$patientDate','$patientTime','$patientReason', '$patientAlagis')";

  if(mysqli_query($conn, $sql)) {
    echo "Insert Successful";
  }
  else
  {
    echo "Error".$conn->error;
  }

  $conn->close();



?>