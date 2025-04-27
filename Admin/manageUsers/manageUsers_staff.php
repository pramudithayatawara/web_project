<?php
// make db connection
require_once "../../DB_Connection.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="./manageUsersStaff.css">
</head>

<body style="overflow-X:hidden;min-height:100vh;height:auto;">
    <!-- headedr -->
    <div id="header">
        <table style="width: 100%;">
            <tr>
                <td style="width: 25%">
                    <!-- logo image -->
                    <img src="../images/allPages/logo.png" alt="campanyLogo" width="30%">
                </td>
                <td>
                    <h1><span>V</span>AX-<span>P</span>ORTAL</h1>
                </td>
                <td style="width: 25%;">
                    <a href="../../index.php"><button id="lgoutBtn"><b>Log out</b></button></a>
                </td>
            </tr>
        </table>
    </div>
    <!-- end header -->

    <!-- body area -->
    <div>




        <table style="width:100%; ">
            <tr>

                <!-- left navigation -->
                <td id="nav">
                    <hr>
                    <a href="../dashboard.php"><button class="leftNavbtn">Dashboard</button></a> <br>
                    <hr>
                    <a href="../doctorDetails/readDoctorDetails.php"><button class="leftNavbtn">Manage Doctors</button></a> <br>
                    <hr>
                    <a href="../vaccineDetails/readvaccine.php"><button class="leftNavbtn">Manage Vaccine Details</button></a> <br>
                    <hr>
                    <a href="./manageUsers_staff.php"><button class="leftNavbtn">Manage Users</button></a> <br>
                    <hr>
                    <a href="../contactus/CUdisplay.php"><button class="leftNavbtn">Contact Us Details</button></a> <br>
                    <hr>
                    <a href="../dashboard.php"><button class="leftNavbtn">Manage Orders</button></a> <br>
                    <hr>
                    <a href="../booking/displayBookingDetails.php"><button class="leftNavbtn">Booking Details</button></a> <br>
                    <hr>
                    <a href="../dashboard.php"><button class="leftNavbtn">Manage Suppliers</button></a> <br>
                    <hr>
                    <a href="../dashboard.php"><button class="leftNavbtn">Setting</button></a> <br>
                </td>

                <!-- content area -->
                <td id="dataDisplay">



                    <!-- display users details -->
                    <center>
                        <div>

                            <div id="addNewUsers">
                                <table>
                                    <tr>
                                        <td> <a href="./newUser.php"><button>Add New Users</button></a> </td>
                                    </tr>
                                </table>
                            </div>

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
                                        <input type='hidden' name='id' value='" . $rows['employee_id'] . "'>
                                    <td><input class='editBtn' type='submit' name='edit' value='Edit'></td>
                                    </form>
                                    <form method='POST' action='./deeteDatabase.php'>
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



</body>

</html>