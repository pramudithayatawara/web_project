<?php
include '../../DB_Connection.php';




if (isset($_POST['submit'])) {
    $updateId = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];


    $sql = "UPDATE contact SET
            name='$name' ,
            email='$email' , 
            mobile='$mobile' , 
            message='$message' 
            WHERE id= $updateId ";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // echo "updated successfully";
        echo "<script>window.location.href='./CUdisplay.php';</script>";
    } else {
        die(mysqli_error($conn));
    }
}
?> 