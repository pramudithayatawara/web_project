<?php
// make db connection
require_once "../DB_Connection.php";
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
    } else {
        echo "<script>
                alert('Error updating record: " . mysqli_error($conn) . "');
            </script>";
    }
}

?>

<!-- delete employee details -->
<?php

if(isset($_POST["delete"])){
    // get delete row number from employee id
    $delete_id = $_POST ["employee_id"];
    $deleteSql = "DELETE FROM employee WHERE employee_id = $delete_id";

    // Execute query and check for success or failure
    if(mysqli_query($conn, $deleteSql)){
        echo "<script>
        alert('Deleted Successfully !');
    </script>"; 
    } else {
        echo "<script>
            alert('Error deleting employee.');
        </script>";
    }

}
   
?>


<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <style>
        #header h1>span {
            color: #313d97;
            font-size: 50px;
        }

        #header h1 {
            margin-top: 20px;
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            letter-spacing: 5px;
            font-weight: bold;
        }

        .leftNavbtn {
            width: 100%;
            height: 40px;
            border: none;
            background-color: transparent;
            font-size: medium;
        }

        #dataDisplay td {
            padding-left: 10px;
        }

        #dataDisplay tr {
            height: 35px;
        }

        #dataDisplay tr button {
            width: 75px;
        }

        .editBtn {
            background-color: #37e93d;
        }

        .deleteBtn {
            background-color: #e93737;
        }
    </style>
</head>

<body style="overflow-X:hidden;">
    <!-- headedr -->
    <div id="header">
        <table style="width: 100%;">
            <tr>
                <td style="width: 25%">
                    <img src="../images/allPages/logo.png" alt="campanyLogo" width="30%">
                </td>
                <td>
                    <h1><span>V</span>AX-<span>P</span>ORTAL</h1>
                </td>
                <td style="width: 25%;">
                    <button style="float: right;margin-right:40px;">Log out</button>
                </td>
            </tr>
        </table>
    </div>

    <!-- body area -->
    <div>
        <table style="width:100%; ">
            <tr>
                <!-- left navigation -->
                <?php require_once "./adminNavbar.php"; ?>

                <!-- content area -->
                <td id="dataDisplay">
                    <!-- display users details -->
                    <center>
                        <div>
                            <table style="width: 90%;">

                                <tr>
                                    <th>Employee Id</th>
                                    <th>Employee First Name</th>
                                    <th>Employee Last Name</th>
                                    <th>Contact Number</th>
                                    <th>E-mail</th>
                                    <th>Age</th>
                                    <th>Address</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                <tr>
                                    <td colspan='9'>
                                        <hr>
                                    </td>
                                </tr>

                                <?php
                                $display = "SELECT * FROM employee";
                                $result = $conn->query($display);

                                if ($result->num_rows > 0) {
                                    while ($rows = $result->fetch_assoc()) {
                                        echo "<tr>
                                    <td>" . $rows['employee_id'] . "</td>
                                    <td>" . $rows['employee_Fname'] . "</td>
                                    <td>" . $rows['employee_Lname'] . "</td>
                                    <td>" . $rows['contact_number'] . "</td>
                                    <td>" . $rows['e_mail'] . "</td>
                                    <td>" . $rows['age'] . "</td>
                                    <td>" . $rows['addres'] . "</td>
                                    <form method='POST' action='./update.php'>
                                    <input type='hidden' name='employee_id' value='" . $rows['employee_id'] . "'>
                                    <td><input class='editBtn' type='submit' name='edit' value='Edit'></td>
                                    </form>
                                    <form method='POST'>
                                            <input type='hidden' name='employee_id' value='" . $rows['employee_id'] . "'>
                                            <td><input class='deleteBtn' type='submit' name='delete' value='Delete'></td>
                                        </form>
                                    </tr>";
                                        echo "<tr><td colspan='9'><hr></td></tr>";
                                    }
                                }
                                ?>
                            </table>
                        </div>
                    </center>
                </td>
            </tr>
        </table>
    </div>

    <script>





    </script>

</body>

</html>