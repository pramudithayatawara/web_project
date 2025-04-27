<?php
// make db connection
require_once "../../DB_Connection.php";
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

        #lgoutBtn {
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-left: 160px;
            width: 100px;
            background-color: #6b1d1d;
            color: white;
            border: 2px solid #b23b3b;
        }

        #lgoutBtn:hover {
            background-color: rgb(123, 125, 126);
        }

        /* css for left nav bar */
        button {
            cursor: pointer;
        }

        #nav {
            width: 20%;
            padding: 40px 20px 0px 20px;
            border-right: 1px solid black;
            vertical-align: top;
        }
    </style>
    <link rel="stylesheet" href="./addNew.css">
</head>

<body style="overflow-X:hidden;height:auto;">
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

                            <div class="newForm">
                                <form action="./insertData.php" method="POST" onsubmit="return validateForm()">

                                    First Name :<br>
                                    <input type="text" name="fName" maxlength="60" required><br>

                                    Last Name :<br>
                                    <input type="text" name="lName" maxlength="20" required><br>

                                    Contact Number :<br>
                                    <input type="text" name="tel" required id="tel"><br><br>

                                    Email :<br>
                                    <input type="email" name="email" required><br>

                                    Age :<br>
                                    <input type="text" name="age" required id="age"><br>

                                    Address :<br>
                                    <textarea name="add" rows="8" cols="73" required></textarea>

                                    <br>
                                    <input type="checkbox" id="checkBox" onclick="enableButton()">I agree to the terms and conditions.<br><br>
                                    <input type="submit" value="Send" id="submitBtn" name="submit">
                                    <button class="clearbtn" id="clearBtn" type="reset">Clear All</button>

                                </form>

                            </div>
                    </center>
                </td>
            </tr>
        </table>
    </div>


    <script>
        function validateForm() {

            // check contack number 
            var tel = document.getElementById("tel").value;
            var telLength = tel.length;

            // Check if the input is exactly 10 digits
            if (telLength !== 10 || isNaN(tel)) {
                alert("Please enter the valid contact number");
                return false;
            }

            // Check if age is valid
            var age = document.getElementById("age").value;

            if (isNaN(age) || age <= 0 || age > 100) {
                alert("Your age is not matched");
                return false;
            }

            // If both validations pass, allow the form to be submitted
            return true;

        }
    </script>


</body>

</html>