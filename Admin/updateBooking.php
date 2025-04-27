<?php
// make db connection
require_once "../DB_Connection.php";
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

        #updateForm {
            margin-left: 20%;
        }

        #updateForm fieldset {
            padding: 30px;
            padding-left: 50px;
            padding-right: 50px;
        }

        #updateForm lable {
            font-size: 18px;
        }

        #updateForm input {
            margin-left: 50px;
            width: 250px;
            height: 25px;
            margin-bottom: 20px;
        }

        #cancelBtn {
            background-color: #e93737;
            margin-top: 20px;
            font-weight: bold;
            transition: 0.5s;
        }

        #okBtn {
            background-color: #37e93d;
            font-weight: bold;
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

    <div>
        <table style="width:100%; ">
            <tr>
                <!-- left navigation -->
                <?php require_once "./adminNavbar.php"; ?>

                <!-- content area -->
                <td id="dataDisplay">

                    <!-- update form -->
                    <div>

                        <?php

                        $updatedid = $_POST['id'];
                        $display = "SELECT * FROM booking WHERE ID = $updatedid";
                        $result = $conn->query($display);

                        if ($result->num_rows > 0) {
                            while ($rows = $result->fetch_assoc()) {
                        ?>
                                <div id="updateForm">
                                    <form action="./displayBookingDetails.php" method="POST">
                                        <fieldset style="width:40%;margin-left:25px;">
                                            <input type='hidden' name='ID' value="<?php echo $rows['ID']; ?>">
                                            <legend>
                                                <h3>Update Booking Details</h3>
                                            </legend>
                                            <label>Name : </label> <br>
                                            <input type="text" name="pname" placeholder="<?php echo $rows["Name"]  ?>" value="<?php echo $rows['Name']; ?>"> <br>
                                            <label>Tp No: </label> <br>
                                            <input type="text" name="ptpno" placeholder="<?php echo $rows["TpNo"]  ?>" value="<?php echo $rows['TpNo']; ?>"> <br>
                                            <label>Date : </label> <br>
                                            <input type="text" name="pdate" placeholder="<?php echo $rows["Date"]  ?>" value="<?php echo $rows['Date']; ?>"> <br>
                                            <lable>Time : </lable> <br>
                                            <input type="text" name="ptime" placeholder="<?php echo $rows["Time"]  ?>" value="<?php echo $rows['Time']; ?>"> <br>
                                            <label>Reason : </label> <br>
                                            <input type="text" name="preason" placeholder="<?php echo $rows["Reason"]  ?>" value="<?php echo $rows['Reason']; ?>"> <br>
                                            <label>Alagics : </label> <br>
                                            <input type="text" name="palagic" placeholder="<?php echo $rows["Alagics"]  ?>" value="<?php echo $rows['Alagics']; ?>"> <br>
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