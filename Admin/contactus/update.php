

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
   
    <link rel="stylesheet" href="./CUdisplay.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="./contactUs.css">
    <!-- js files -->
    <script src="./CUdisplay.js"></script>
    <style>
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
        button {
            cursor: pointer;
        }

        #nav {
            width: 20%;
            padding: 40px 20px 0px 20px;
            border-right: 1px solid black;
            vertical-align: top;
        }

        body {
            background: linear-gradient(0deg, rgb(107, 118, 203) 0%, rgba(195, 198, 225, 1) 100%);
            height: 100vh;
        }
        #upd,#del{
            width: 60px;
            padding: 5px;
        }

        fieldset{
            background-color: #8a8f96;
            padding: 20px 50px 20px 50px;
        }
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
                    <a href="../doctorDetails/readDoctorDetails.php"><button class="leftNavbtn">Manage Doctors</button></a> <br>
                    <hr>
                    <a href="../vaccineDetails/readvaccine.php"><button class="leftNavbtn">Manage Vaccine Details</button></a> <br>
                    <hr>
                    <a href="../manageUsers/manageUsers_staff.php"><button class="leftNavbtn">Manage Users</button></a> <br>
                    <hr>
                    <a href="./CUdisplay.php"><button class="leftNavbtn">Contact Us Details</button></a> <br>
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
                        <div>
                        <?php
                        include '../../DB_Connection.php';
                        $updatedid = $_GET["updateid"];
                        $display = "SELECT * FROM contact WHERE id = $updatedid";
                        $result = $conn->query($display);
                        $rows = $result->fetch_assoc();
                        $id = $rows['id'];
                        $name = $rows['name'];
                        $email = $rows['email'];
                        $mobile = $rows['mobile'];
                        ?>


                            <div class="main">
                                <div class="contact">
                                    <!-- update form-->
                                    <div class="Cform">
                                        <fieldset>
                                            <legend>Fill the form</legend>
                                            <form class="set" name="myForm" action="./updateQuery.php" method="post" onsubmit="return validateForm()">
                                                <input type="hidden" name="id" value=<?php echo $id; ?>>
                                                <b>Full Name:</b><br />
                                                <input type="text" name="name" placeholder="Full Name" autocomplete="off" value=<?php echo $name; ?>><br /><br />

                                                <b> E-mail:</b><br />
                                                <input type="email" name="email" placeholder="abc@gmail.com" autocomplete="off" value=<?php echo $email; ?>><br /><br />

                                                <b>Mobile Number:</b><br />
                                                <input type="phone" name="mobile" placeholder="07x-xxx-xxxx" autocomplete="off" value=<?php echo $mobile; ?>><br /><br />

                                                <b>Enter Your Message:</b><br />
                                                <textarea name="message" rows="8" cols="40" required></textarea><br /><br />

                                                <!--update button-->
                                                <div class="SRbtn">
                                                    <input type="submit" id="submitBtn1" value="Update" name="submit">
                                                    <br><br>

                                            </form>
                                        </fieldset>

                                    </div>
                                </div>
                            </div>



</body>
<!--footer-->
<footer class="myfooter">
    <center>
        &copy; 2024 Copyright Reserved - Vax-Portal<br>
        <small>viewportaliwt@gmail.com</small>
    </center>

</footer>

</html>