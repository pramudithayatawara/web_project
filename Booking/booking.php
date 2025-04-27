<!DOCTYPE html>
<html>

<head>
  <title>Vax-Portal</title>
  <!-- fontawsome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- css files -->
  <link rel="stylesheet" href="../pluggins/bookingStyles.css">
  <link rel="stylesheet" href="../pluggins/style.css">
  <!-- aos animation -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


</head>

<style>
  fieldset{
    margin-top: 0px;
    margin: 30px 0px 20px 50px;
    width:55%;
  }
  #form{
    width: 60%;
    padding: 0px 80px;
  }
  img{
    border-radius: 10px;
    margin-top: 20px;
  }
</style>


<!-- start headre file -->
<div id="headerArea" style="width: 200%;">

  <table style="width: 50%;">
    <tr>
      <td style="width: 15%;">
        <!-- add logo  -->
        <img src="../images/allPages/logo.png" alt="logo" width="50%" height="auto">
      </td>
      <td style="width: 70%;">
        <div>
          <table>
            <tr>
              <h3 class="title"><span>V</span>AX-<span>P</span>ORTAL</h3>
            </tr>
            <tr>
              <nav>
                <a href="../index.php">
                  <h6>Home</h6>
                </a>
                <a href="../contact/contactUs.php">
                  <h6>Customer Care</h6>
                </a>
                <a href="../aboutus.php">
                  <h6>About Us</h6>
                </a>
                <a href="../Booking/booking.php">
                  <h6>Booking</h6>
                </a>
                <a href="../signInForm.php">
                  <h6>Sign Up</h6>
                </a>
              </nav>
            </tr>
          </table>
        </div>
      </td>
      <td class="logo">
        <a href="../Admin/loginForm.php"><button class="btn">
            <h4><i class="fa-solid fa-user"></i></h4>
          </button></a>
        <button class="btn">
          <h4><i class="fa-solid fa-cart-shopping"></i></h4>
        </button>
      </td>
    </tr>
  </table>


</div>
<!-- end the header area -->


<div id="mainCon">
  <!-- start main content -->
  <table style="width: 100%;">
    <tr>
      <td id="form">
        <fieldset>

          <legend><b>Booking Information</b></legend>
          <form method="post" action="insert.php" onsubmit="return validateForm()">

            <lable for="Name">Name:</lable>
            <input type="text" id="Name" name="pname"><br>

            <lable for="tpno">Telephone Number:</lable>
            <input type="tel" id="tpno" name="ptpno"><br>

            <lable for="date">Date:</lable>
            <input type="date" id="date" name="pdate"><br>

            <lable for="time">Time:</lable>
            <input type="time" id="time" name="ptime"><br>

            <lable for="Reason">Reason:</lable>
            <input type="text" id="reason" name="preason"><br>

            <lable for="alagic">Alagics:</lable>
            <input type="text" id="alagic" name="palagic"><br>

            <input type="reset"><br>
            <input type="submit">

          </form>
        </fieldset>
      </td>
      <!-- add booking page iamge -->
      <td>
        <img src="../images/allPages/bookinPage.jpg" alt="" width="90%" height="">
      </td>
    </tr>
  </table>
</div>

<!-- end main content -->


<!-- start footer area -->
<div id="footer">
  <!-- footer start -->
  <table style="width: 100%;">
    <tr>
      <td>
        <h5>Contact Us</h5>
        <div style="margin-left: 20px;">
          <h6>No:78,Kandy Road, malabe</h6>
          <h6>+94 77 890 7002</h6>
          <h6>viewportaliwt@gmail.com</h6>
        </div>
      </td>
      <td>
        <h5>Follow Us</h5>
        <div class="icons" style="font-size: 25px;color:white; padding:0px 25px;">
          <div class="col"><i class="fa-brands fa-facebook"></i></div>
          <div class="col"><i class="fa-brands fa-twitter"></i></div>
          <div class="col"><i class="fa-brands fa-linkedin"></i></div>
          <div class="col"><i class="fa-solid fa-g"></i></i></div>
        </div>
        <h5>Payement Methods</h5>
      </td>
    </tr>
  </table>
</div>

<!-- end footer area -->

<script>
  function validateForm() {

    // check contack number 
    var tel = document.getElementById("tpno").value;
    var telLength = tel.length;

    // Check if the input is exactly 10 digits
    if (telLength !== 10 || isNaN(tel)) {
      alert("Please enter the valid contact number");
      return false;
    }
    return true;
  }
</script>


</body>

</html>