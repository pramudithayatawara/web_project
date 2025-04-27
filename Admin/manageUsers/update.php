<?php
// make db connection
require_once "../../DB_Connection.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <!-- css files -->
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="./addNew.css">
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
                    <a href="../../index.php"><button id="lgoutBtn"><b>Log out</b></button></a>
                </td>
            </tr>
        </table>
    </div>

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

                    <!-- update form -->
                    <div>

                        <?php

                        $updatedid = $_POST["id"];
                        $display = "SELECT * FROM employee WHERE employee_id = $updatedid";
                        $result = $conn->query($display);

                        if ($result->num_rows > 0) {
                            while ($rows = $result->fetch_assoc()) {
                        ?>
                                <div id="updateForm">
                                    <form action="./updateDatabase.php" method="POST">
                                        <fieldset style="width:40%;margin-left:25px;">
                                            <input type='hidden' name='empolyee_id' value="<?php echo $rows['employee_id']; ?>">
                                            <legend>
                                                <h3>Update User Details</h3>
                                            </legend>
                                            <label>First Name : </label> <br>
                                            <input type="text" name="Fname" placeholder="<?php echo $rows["employee_Fname"]  ?>" value="<?php echo $rows['employee_Fname']; ?>"> <br>
                                            <label>Last Name : </label> <br>
                                            <input type="text" name="Lname" placeholder="<?php echo $rows["employee_Lname"]  ?>" value="<?php echo $rows['employee_Lname']; ?>"> <br>
                                            <label>Contact Number : </label> <br>
                                            <input type="text" name="telNumber" placeholder="<?php echo $rows["contact_number"]  ?>" value="<?php echo $rows['contact_number']; ?>"> <br>
                                            <lable>E-mail : </lable> <br>
                                            <input type="text" name="e_mail" placeholder="<?php echo $rows["e_mail"]  ?>" value="<?php echo $rows['e_mail']; ?>"> <br>
                                            <label>Age : </label> <br>
                                            <input type="text" name="age" placeholder="<?php echo $rows["age"]  ?>" value="<?php echo $rows['age']; ?>"> <br>
                                            <label>Address : </label> <br>
                                            <input type="text" name="address" placeholder="<?php echo $rows["addres"]  ?>" value="<?php echo $rows['addres']; ?>"> <br>
                                            <div id="submitionBtn">
                                                <input type="submit" value="Cancel" value="cancel" id="cancelBtn">
                                                <input type="submit" name="Submit" value="Submit" id="okBtn">
                                            </div>
                                        </fieldset>
                                    </form>
                                    <?php

                                    ?>
                                </div>
                        <?php

                            }
                        }

                        ?>
                    </div>
                </td>
            </tr>
        </table>
    </div>


</body>

</html>