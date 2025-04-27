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

  <!--Css part to table -->
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;

    }

    td,
    th {
      /* border: 1px solid #dddddd; */
      text-align: left;
      padding: 8px;
    }

    #button_container {
      display: flex;
      justify-content: center;
      gap: 15px;


    }

    tr:nth-child(even) {

      background-color: #dddddd;
    }

    #update {
      background-color: #4CAF50;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.3);
      padding: 5px;
    }

    #update:hover {
      transform: scale(1.1);
    }

    #delete {
      border-color: black;
      background-color: red;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.3);
      padding: 5px;

    }

    #delete:hover {
      transform: scale(1.1);
    }

    #create {
      border-color: black;
      background-color: blue;
      margin-left: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.3);
      width: 200px;
      padding: 10px;
    }

    #create:hover {
      transform: scale(1.1);
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
      min-height: 100vh;
      height: auto;
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

          <form action='./createvaccine.php' method='POST'>
            <input type='hidden' name='id' value="$row['ID']">
            <input type='submit' name='add' id='create' value='Add New Vaccine'>
          </form>
          <br><br>



          <div class="table">


            </head>

            <body>

              <!--Create table to read vaccine details-->
              <table>
                <tr>
                  <th>Vaccine ID</th>
                  <th>Vaccine Name</th>
                  <th>Quantity</th>
                  <th>Supplier Name</th>
                  <th>Country</th>
                  <th>Update/Delete</th>

                </tr>


                <?php


                //Read Vaccine Details from data base
                $sql1 = "SELECT vaccineID , VaccName, vacQty , supplierName , country FROM vaccine";

                $result = $conn->query($sql1);

                if ($result->num_rows > 0) {

                  while ($row = $result->fetch_assoc()) {

                    echo "<tr>";
                    echo "<td>"  . $row["vaccineID"] .  "</td>"  .  "<td>"  . $row["VaccName"] .  "</td>"  . "<td>"  . $row["vacQty"] .  "</td>"  .  "<td>"  . $row["supplierName"] . "</td>" . "<td>"  . $row["country"] .  "</td>";
                    echo "<td>";
                    echo "<div id ='button_container'>";
                    echo "<form action='./vaccineupdatedetails.php' method='POST'>
            <input type='hidden' name='vid' value=" . $row["vaccineID"] . ">
            <input type='submit' name='update' id ='update' value='Update'> 
          </form>";


                    echo "<form action='./deletevaccine.php' method='POST'>
           <input type='hidden' name='vid' value=" . $row["vaccineID"] . ">
           <input type='submit' name='delete' id='delete' value='Delete'>
         </form>";
                    echo "</div>";
                    echo "</td>";
                    echo "</tr>";
                  }
                } else {

                  echo "No data to read!";
                }


                $conn->close();

                ?>


              </table>
          </div>

        </td>
      </tr>
    </table>
  </div>


</body>

</html>