<?php
// make db connection
require_once "../../DB_Connection.php";
?>

<!-- update user details -->
<?php

// query for update emplyee details
if (isset($_POST["Submit"])) {
    $id = $_POST["empolyee_id"];
    $F_name = $_POST["Fname"];
    $L_name = $_POST["Lname"];
    $tel = $_POST["telNumber"];
    $mail = $_POST["e_mail"];
    $age = $_POST["age"];
    $add = $_POST["address"];

    // SQL query to update the employee record
    $sql = "UPDATE employee 
            SET employee_Fname='$F_name', 
                employee_Lname='$L_name', 
                contact_number='$tel', 
                e_mail='$mail', 
                age='$age', 
                addres='$add' 
            WHERE employee_id=$id";

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