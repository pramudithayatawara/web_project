<?php
// make db connection
require_once "../../DB_Connection.php";
?>

<!-- update user details -->
<?php

// query for update emplyee details
if (isset($_POST["submit"])) {
    
    $F_name = $_POST["fName"];
    $L_name = $_POST["lName"];
    $tel = $_POST["tel"];
    $mail = $_POST["email"];
    $age = $_POST["age"];
    $add = $_POST["add"];

    // SQL query to update the employee record
    $sql = "INSERT INTO employee VALUES ('','$F_name','$L_name','$tel','$mail','$age','$add') ";

    // Execute query and check for success or failure
    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('Employee record updated successfully');
            </script>";
        echo "<script>window.location.href='./manageUsers_staff.php';</script>";
    } else {
        echo "<script>
                alert('Error updating record: " . mysqli_error($conn) . "');
            </script>";
    }
}

?>