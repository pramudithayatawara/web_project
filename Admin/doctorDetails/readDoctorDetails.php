<?php
// make db connection
require_once "../../DB_Connection.php";
?>


<!-- Update details -->
<?php



if (isset($_POST["update"])) {
    $email = $_POST["email"];
    $fName = $_POST["fName"];
    $lName = $_POST["lName"];
    $pNumber = $_POST["pNum"];
    $address = $_POST["address"];

    $updateDetails = "UPDATE doctor
        SET First_Name = '$fName',
        Last_Name = '$lName',
        Contact_Number = '$pNumber',
        Addres = '$address' 
        WHERE E_mail = '$email'";

    if (mysqli_query($conn, $updateDetails)) {
        echo "<script>
                    alert ('Data update successfull...');
                </script>";
    } else {
        echo "<script>
                    alert ('Data update unsuccessfull...');
                </script>";
    }
}

?>

<!-- Delete details -->
<?php

if (isset($_POST["delete"])) {
    $email = $_POST["ID"];

    $deleteDetails = "DELETE FROM doctor WHERE E_mail = '$email'";

    if (mysqli_query($conn, $deleteDetails)) {
        echo "<script>
                alert ('Data delete successfull...');
            </script>";
        echo "<script>
            window.location.href = './readDoctorDetails.php';
        </script>";
    } else {
        echo "<script>
                alert ('Data delete unsuccessfull...');
            </script>";
    }
}

?>




<!DOCTYPE html>
<html>

<head>
  <title>Dashboard</title>
  <!-- link css files -->
   <link rel="stylesheet" href="./readDoctorDetails.css">
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

        <!-- topic -->

          <table border="2">

            <table border="2">
              <tr align="center">
                <th width="500">ID</th>
                <th width="500">First Name</th>
                <th width="500">Last Tp No</th>
                <th width="500">E-mail</th>
                <th width="500">Address</th>
                <th width="500">Contact Number</th>
                <th width="500">Edit</th>
                <th width="500">Delete</th>
              </tr>

              <?php

              $disply = "SELECT * FROM doctor";
              $result = $conn->query($disply);

              if ($result->num_rows > 0) {
                while ($rows = $result->fetch_assoc()) {
                  echo "<tr>

                  <td>" . $rows['Doctor_ID'] . "</td>
                  <td>" . $rows['First_Name'] . "</td>
                  <td>" . $rows['Last_Name'] . "</td>
                  <td>" . $rows['E_mail'] . "</td>
                  <td>" . $rows['Addres'] . "</td>
                  <td>" . $rows['Contact_Number'] . "</td>
                  <form method='POST' action='./doctorDetails.php'>
                    <input type='hidden' name='ID' value='".$rows['Doctor_ID']."'>
                    <th><input class='editBtn' type='submit' name='edit' value='Edit'></th>
                  </form>
                  <form method='POST' action='#'>
                    <input type='hidden' name='ID' value='" . $rows['E_mail'] . "'>
                      <th><input class='deleteBtn' type='submit' name='delete' value='Delete'></th>
                    </form>
                  </tr>";
                }
              }
              ?>

            </table>


        </td>
      </tr>
    </table>
  </div>


</body>

</html>