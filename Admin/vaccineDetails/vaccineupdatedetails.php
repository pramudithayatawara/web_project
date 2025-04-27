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
  <link rel="stylesheet" href="vaccine.css">
  <script src="vaccine.js"></script>
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

    fieldset {
      background-image: url('../images/tk1.jpg');
      background-size: cover;
      background-repeat: no-repeat;
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
  </style>
</head>

<body style="overflow-X:hidden;height:auto;">
  <!-- headedr -->
  <div id="header" style="border: none;">
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

          <?php

          if (isset($_POST["update"])) {

            // create date base connection
            require_once "../../DB_Connection.php";

            $id_num = $_POST["vid"];

            $sql = "SELECT * FROM vaccine WHERE vaccineID = $id_num";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

              $row = $result->fetch_assoc();





              echo "

<form method = 'POST' action ='updatevaccine.php' id='new_vaccine'>
<fieldset>
<legend>Update Vaccine Details</legend>
<marquee><h2 id= 'heading'>Manage Vaccine</h2></marquee>

<!--Enter new vaccine-->
      <input type = 'hidden' name = 'vid'  value='" . $row['vaccineID'] . "'>
      <br><br>

    Vaccine Name  <br>
      <input type = 'text' name ='vname' placeholder='Enter Vaccine name' autocomplete='off'  value='" . $row['vaccName'] . "'>
      <br><br>

    Quantity <br>
      <input type = 'text' name ='vquantity' placeholder='Enter Quantity' autocomplete='off' value='" . $row['vacQty'] . "'>
      <br><br>

    Supplier Name  <br>
      <input type = 'text' name = 'vsname' placeholder='Enter supplier name' autocomplete='off'value='" . $row['supplierName'] . "'>
      <br><br>

    Country  <br>
      <input type = 'text' name = 'vcountry' placeholder='Enter country' autocomplete='off' value='" . $row['country'] . "'>
      <br><br>

    
    <input type = 'submit' name='update' value = 'Update'>
    

</form>
</fieldset>
</div>

";
            }
          }

          ?>



        </td>
      </tr>
    </table>
  </div>


</body>

</html>