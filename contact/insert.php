<?php
include '../DB_Connection.php';
?>

<?php


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];


    //Correct the SQL syntax by using backticks around the table name
    $sql = "INSERT INTO contact (Name, Email, Mobile, Message)
                VALUES ('$name', '$email', '$mobile', '$message') ";


    // Execute the query
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>
                alert('Sended Your Messege..!');
            </script>";
        echo "<script>window.location.href='./contactUs.php';</script>";
    } else {
        die(mysqli_error($conn));
    }
}
?>