<!--include connection file-->
<?php

  require '../DB_Connection.php'; 

  
  $patientName=$_POST["pname"];
  $patientTpNo=$_POST["ptpno"];
  $patientDate=$_POST["pdate"];
  $patientTime=$_POST["ptime"];
  $patientReason=$_POST["preason"];
  $patientAlagis=$_POST["palagic"];

  $sql="INSERT INTO booking (Name,TpNo,Date,Time,Reason,Alagics) VALUES ('$patientName','$patientTpNo','$patientDate','$patientTime','$patientReason', '$patientAlagis')";

  if(mysqli_query($conn, $sql)) {
    echo "<script>
      alert('Add Your Booking');
    </script>";
    echo "<script>window.location.href='../index.php';</script>";  
  }
  else
  {
    echo "Error".$conn->error;
  }

  $conn->close();



?>