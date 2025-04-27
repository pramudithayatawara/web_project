<?php
// make db connection
require_once "../../DB_Connection.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <!-- add css file -->
    <link rel="stylesheet" href="./updateBooking.css">
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
    <!-- end header -->

    <div>
        <table style="width:100%;">

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

                        $updatedid = $_POST['id'];
                        $display = "SELECT * FROM booking WHERE bookingID = $updatedid";
                        $result = $conn->query($display);

                        if ($result->num_rows > 0) {
                            while ($rows = $result->fetch_assoc()) {
                        ?>
                                <div id="updateForm">
                                    <form action="./displayBookingDetails.php" method="POST">
                                        <fieldset style="width:60%;margin-left:15px; ">
                                            <input type='hidden' name='ID' value="<?php echo $rows['bookingID']; ?>">
                                            <legend>
                                                <h3>Update Booking Details</h3>
                                            </legend>
                                            <label>Name : </label>
                                            <input class="t1" type="text" name="pname" placeholder="<?php echo $rows["Name"]  ?>" value="<?php echo $rows['Name']; ?>"> <br>
                                            <label>Tp No: </label>
                                            <input class="t1" type="text" name="ptpno" placeholder="<?php echo $rows["TpNo"]  ?>" value="<?php echo $rows['TpNo']; ?>"> <br>
                                            <label>Date : </label>
                                            <input class="t1" type="text" name="pdate" placeholder="<?php echo $rows["Date"]  ?>" value="<?php echo $rows['Date']; ?>"> <br>
                                            <lable>Time : </lable>
                                            <input class="t1" type="text" name="ptime" placeholder="<?php echo $rows["Time"]  ?>" value="<?php echo $rows['Time']; ?>"> <br>
                                            <label>Reason : </label>
                                            <input class="t1" type="text" name="preason" placeholder="<?php echo $rows["Reason"]  ?>" value="<?php echo $rows['Reason']; ?>"> <br>
                                            <label>Alagics : </label>
                                            <input class="t1" type="text" name="palagic" placeholder="<?php echo $rows["Alagics"]  ?>" value="<?php echo $rows['Alagics']; ?>"> <br>
                                            <div id="submitionBtn">
                                                <input type="submit" value="Cancel" value="cancel" id="cancelBtn" style="color: white;">
                                                <input type="submit" name="Submit" value="Submit" id="okBtn" style="color: white;">
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