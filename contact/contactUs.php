<!DOCTYPE html>
<html>

<head>
    <title>Vax-Portal</title>
    <!-- fontawsome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- css files -->
    <link rel="stylesheet" href="../pluggins/style.css">
    <link rel="stylesheet" href="../pluggins/contactUsStyle.css">
    <link rel="stylesheet" href="../Admin/contactus/contactUs.css">

    <!-- aos animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="../Admin/contactus/contactmy.js"></script>

</head>

<style>

</style>

<body style="width: 100%;">

    <!-- start headre file -->
    <div id="headerArea" style="width: 100%;">

        <table style="width: 100%;">
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
                                    <a href="#">
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


    <!-- contact us page-->
    <div class="main">

        <!-- page header-->
        <center>
            <h1 class="topic"><b>Contact Vax-Portal</b></h1>
        </center>
        <div class="contact-det">
            <p><b>If you have any questions or need assistance, we're here to help!</b></p><br>

            <button id="Fbtn" onclick="askContactNow()">Contact Us Now</button> <br>

            <p><b>Need help scheduling your vaccinations? Visit the Online Vaccination Portal today for
                    personalized support. Our team is ready to help you find the right vaccination appointments that
                    fit your schedule. Contact us via phone, email, or simply fill out the form below. Your health
                    and convenience are our top priorities!</b></p>

        </div>


        <div class="contact">

            <!-- contact form-->
            <div class="Cform">
                <fieldset>
                    <legend>Fill the form</legend>
                    <form class="set" name="myForm" action="./insert.php" method="post" onsubmit="return validateForm()">
                        <b>Full Name:</b><br />
                        <input type="text" name="name" placeholder="Full Name" autocomplete="off"><br /><br />

                        <b> E-mail:</b><br />
                        <input type="email" name="email" placeholder="abc@gmail.com" autocomplete="off"><br /><br />

                        <b>Mobile Number:</b><br />
                        <input type="phone" name="mobile" placeholder="07x-xxx-xxxx" autocomplete="off"><br /><br />

                        <b>Enter Your Message:</b><br />
                        <textarea name="message" rows="8" cols="40" required></textarea><br /><br />

                        <div class="SRbtn">
                            <button id="submitBtn1" type="submit" value="Submit" name="submit" onclick="myfunction()">Submit</button>
                            <br><br>

                            <button id="submitBtn2" type="reset" value="Cancel" onclick="myfunction1()">Reset</button>

                        </div>

                </fieldset>
                </form>
            </div>

            <!-- contact details-->
            <div class="det">
                <fieldset>

                    <legend><b>Contact us via</b></legend>

                    <p><img src="../images/allPages/call.png"><b>+94 77 890 7002</b></p><br><br>
                    <p><img src="../images/allPages/email.png"><b>viewportaliwt@gmail.com</b></p><br><br>
                    <p><img src="../images/allPages/location.png"><b>No:78,Kandy Road, malabe</b></p><br>
                    <div class="map"><iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.238058875012!2d79.92727307373315!3d6.981210917677824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae257fccf74d845%3A0xaa4e49359f0e2175!2s78%20Kandy%20-%20Colombo%20Rd%2C%20Kiribathgoda!5e0!3m2!1sen!2slk!4v1727680459995!5m2!1sen!2slk"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>

</body>
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

</html>