<?php

// make db connection
require_once "../DB_Connection.php";

if (isset($_POST["Login"])) {
    $username = $_POST["userName"];
    $pass = $_POST["password"];
    $sql = "SELECT pssword FROM login_details WHERE username = '$username' ";


    if ($result = $conn->query($sql)) {
        // Fetch the result from the query
        $row = $result->fetch_assoc();

        // Compare the input password with the fetched password from the database
        if ($pass == $row['pssword']) {
            echo "<script>window.location.href='dashboard.php';</script>";

            exit();
        } else {
            echo "Incorrect password";
            echo "<script>window.location.href='./loginForm.php';</script>";
        }
    } else {
        echo "Error in query execution";
    }
}

?>