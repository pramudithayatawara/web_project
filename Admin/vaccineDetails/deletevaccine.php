<?php


  // create date base connection
  require_once "../../DB_Connection.php";


//For delete vaccine details
if(isset($_POST["delete"])){


    $ID = $_POST["vid"];

    $sql = "DELETE FROM vaccine WHERE vaccineID = '$ID' ";

if(mysqli_query($conn,$sql))
{  
    echo "<script>
            alert('Data Deleted Successfully...!');
        </script>";
        echo "<script>
        window.location.href = 'readvaccine.php';
    </script>";
} 
else
{
    echo "Not Deleted !".$sql."<br>".mysqli_error($con);
}
}

?>