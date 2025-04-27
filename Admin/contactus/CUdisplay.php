<?php
include '../../DB_Connection.php';
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
        //header('location:CUdisplay.php');
    } else {
        die(mysqli_error($conn));
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="./CUdisplay.css">
    <link rel="stylesheet" href="../style.css">
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
    </style>
</head>

<body style="overflow-X:hidden;height:auto;min-height:100vh;">
    <!-- headedr -->
    <div id="header">
        <table style="width: 100%;margin-top:0px;">
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
        <table style="width: 100%;margin-top:0px;">
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
                        <div class="displayArea">
                            <center>
                                <h1 id="top">Customer Care</h1>
                            </center>

                            <!-- display table -->
                            <table id="customers" style="width: 100%;">
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                </tr>

                                <?php
                                $sql = "SELECT id, name, email, mobile, message FROM contact";
                                $result = mysqli_query($conn, $sql);


                                // Check if the query returned any results
                                if ($result) {
                                    while ($row = mysqli_fetch_assoc($result)) {

                                        //Fetch individual fields from the current row
                                        $id = $row['id'];
                                        $name = $row['name'];
                                        $email = $row['email'];
                                        $mobile = $row['mobile'];
                                        $message = $row['message'];

                                        // Output the data 
                                        echo '
                            <tr>
                                <td>' . $id . '</td>
                                <td>' . $name . '</td>
                                <td>' . $email . '</td>
                                <td>' . $mobile . '</td>
                                <td>' . $message . '</td>
                                <td>
                                    <button id="upd" >
                                        <a href="update.php? updateid=' . $id . '" style="color: #ffffff;">Update</a>
                                    </button>
                                    <button id="del" onclick="displaydelete()">
                                        <a href="delete.php? deleteid=' . $id . '" style="color: #ffffff;">Delete</a>
                                    </button>
                                </td>
                            </tr>';
                                    }
                                } else {
                                    echo '<tr><td colspan="6">No records found.</td></tr>';
                                }
                                ?>
                            </table>
                        </div>

                    </div>
                </td>
            </tr>
        </table>
    </div>


</body>

</html>