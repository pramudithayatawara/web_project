<?php
// make db connection
require_once "../../DB_Connection.php";
?>



<!-- delete employee details -->
<?php

if (isset($_POST["delete"])) {
    // get delete row number from employee id
    $delete_id = $_POST["employee_id"];
    $deleteSql = "DELETE FROM employee WHERE employee_id = $delete_id";

    // Execute query and check for success or failure
    if (mysqli_query($conn, $deleteSql)) {
        echo "<script>
        alert('Deleted Successfully !');
    </script>";
    echo "<script>window.location.href='./manageUsers_staff.php';</script>";
    } else {
        echo "<script>
            alert('Error deleting employee.');
        </script>";
    }
}

?>
