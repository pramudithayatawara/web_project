<!-- include header file -->
<?php include("../../DB_Connection.php") ?>



<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>

    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="./doctorDetail.css">
    <style>
        
    </style>
</head>

<body style="overflow-X:hidden;height:auto;">



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
        <table style="width:100%; ">
            <tr>
                <!-- left navigation -->
                <td id="nav">
                    <hr>
                    <a href="../dashboard.php"><button class="leftNavbtn">Dashboard</button></a> <br>
                    <hr>
                    <a href="../doctorDetails/doctorDetails.php"><button class="leftNavbtn">Manage Doctors</button></a> <br>
                    <hr>
                    <a href="../vaccineDetails/readvaccine.php"><button class="leftNavbtn">Manage Vaccine Details</button></a> <br>
                    <hr>
                    <a href="../manageUsers/manageUsers_staff.php"><button class="leftNavbtn">Manage Users</button></a> <br>
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

                    <!-- display contact details -->
                    <div>

                        <!--Read data -->

                        <?php

                        // select doctor details

                        $abc = $_POST['ID'];
                        $selectData = "SELECT * FROM doctor WHERE Doctor_ID = '$abc' ";
                        $result = mysqli_query($conn, $selectData);

                        if ($result->num_rows > 0) {
                            $rows = $result->fetch_assoc();

                            //Display doctor details 

                            echo "
<Div class='manage-form'>
    <form action='./readDoctorDetails.php' method='post'>
    <table>
        <tr>
        <td> <label for='fName'> First Name : </label> </td>
        <td> <input  class='text' type='text' name = 'fName' value = " . $rows['First_Name'] . "> </td> <br>
        </tr>
        <tr>
        <td> <label for='lName'> Last Name : </label> </td>
        <td> <input  class='text' type='text' name = 'lName' value = " . $rows['Last_Name'] . ">  </td><br>
        </tr>
        <tr>
        <td> <label for='email'> email : </label> </td>
        <td> <input  class='text' type='text' name = 'email' value = " . $rows['E_mail'] . " readonly> </td> <br>
        </tr>
        <tr>
        <td> <label for='pNum'> Phone Number : </label> </td>
        <td> <input  class='text' type='text' name = 'pNum' value = " . $rows['Contact_Number'] . "> </td> <br>
        </tr>
        <tr>
        <td> <label for='address'> Address : </label> </td>
        <td> <input  class='text' type='text' name = 'address' value = " . $rows['Addres'] . "> </td> <br>
        </tr>
        <tr>
        <td>
        <td> <input class='btn' type='submit' name = 'update' value = 'update'>
        <input class='btn' type='submit' name = 'delete' value = 'delete'> 
        </td>
        </tr>
    </table>
    </form>
</Div>

";
                        }

                        ?>


                    </div>
                </td>
            </tr>
        </table>
    </div>


</body>

</html>