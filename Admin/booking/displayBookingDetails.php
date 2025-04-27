<?php
// make db connection
require_once "../../DB_Connection.php";
?>


<!-- update user details -->
<?php

// query for update emplyee details
if (isset($_POST["Submit"])) {
  $id = $_POST["ID"];
  $name = $_POST["pname"];
  $tp = $_POST["ptpno"];
  $date = $_POST["pdate"];
  $time = $_POST["ptime"];
  $reason = $_POST["preason"];
  $alagic = $_POST["palagic"];

  // SQL query to update the employee record
  $sql = "UPDATE booking SET 
                Name='$name', 
                TpNo='$tp', 
                Date='$date', 
                Time='$time', 
                Reason='$reason', 
                Alagics='$alagic' 
            WHERE bookingID=$id";

  // Execute query and check for success or failure
  if (mysqli_query($conn, $sql)) {
    echo "<script>
                alert('Employee record updated successfully');
            </script>";
  } else {
    echo "<script>
                alert('Error updating record: " . mysqli_error($conn) . "');
            </script>";
  }
}

?>


<!-- delete booking details -->
<?php

if (isset($_POST["delete"])) {
  // get delete row number from booking
  $delete_id = $_POST["ID"];
  $deleteSql = "DELETE FROM booking WHERE bookingID = $delete_id";

  // Execute query and check for success or failure
  if (mysqli_query($conn, $deleteSql)) {
    echo "<script>
        alert('Deleted Successfully !');
    </script>";
  } else {
    echo "<script>
            alert('Error deleting booking.');
        </script>";
  }
}

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

    #dataDisplay tr {
      height: 40px;
    }

    .editBtn,
    .deleteBtn {
      padding: 5px;
      width: 75px;
      cursor: pointer;
    }

    .editBtn {
      background-color: green;
    }

    .deleteBtn {
      background-color: red;
    }

    .editBtn:hover,
    .deleteBtn:hover {
      background-color: white;
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

          <table border="2">

            <table border="2">
              <tr align="center">
                <th width="500">ID</th>
                <th width="500">Name</th>
                <th width="500">Tp No</th>
                <th width="500">Date</th>
                <th width="500">Time</th>
                <th width="500">Reason</th>
                <th width="500">Alagics</th>
                <th width="500">Edit</th>
                <th width="500">Delete</th>
              </tr>

              <?php

              $disply = "SELECT * FROM booking";
              $result = $conn->query($disply);

              if ($result->num_rows > 0) {
                while ($rows = $result->fetch_assoc()) {
                  echo "<tr>

                  <td>" . $rows['bookingID'] . "</td>
                  <td>" . $rows['Name'] . "</td>
                  <td>" . $rows['TpNo'] . "</td>
                  <td>" . $rows['Date'] . "</td>
                  <td>" . $rows['Time'] . "</td>
                  <td>" . $rows['Reason'] . "</td>
                  <td>" . $rows['Alagics'] . "</td>
                  <form method='POST' action='./updateBooking.php'>
                  <input type='hidden' name='id' value='" . $rows['bookingID'] . "'>
                  <th><input class='editBtn' type='submit' name='edit' value='Edit'></th>
                  </form>
                  <form method='POST' action='displayBookingDetails.php'>
                    <input type='hidden' name='ID' value='" . $rows['bookingID'] . "'>
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