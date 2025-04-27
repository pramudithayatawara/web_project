<!DOCTYPE html>
<html>

<head>
    <title>Vax-Portal</title>
    <!-- fontawsome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- css files -->
    <link rel="stylesheet" href="./pluggins/style.css">
    <link rel="stylesheet" href="./pluggins/signIn.css">
    <!-- aos animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


</head>

<style>
    fieldset {
        background-image: url('./images/allPages/malshaBg.jpeg');
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

<body>

    <!-- start headre file -->
    <div id="headerArea">

        <table style="width: 100%;">
            <tr>
                <td style="width: 15%;">
                    <!-- add logo  -->
                    <img src="./images/allPages/logo.png" alt="logo" width="50%" height="auto">
                </td>
                <td style="width: 70%;">
                    <div>
                        <table>
                            <tr>
                                <h3 class="title"><span>V</span>AX-<span>P</span>ORTAL</h3>
                            </tr>
                            <tr>
                                <nav>
                                    <a href="./index.php">
                                        <h6>Home</h6>
                                    </a>
                                    <a href="./contact/contactUs.php">
                                        <h6>Customer Care</h6>
                                    </a>
                                    <a href="./aboutus.php">
                                        <h6>About Us</h6>
                                    </a>
                                    <a href="./Booking/booking.php">
                                        <h6>Booking</h6>
                                    </a>
                                    <a href="./signInForm.php">
                                        <h6>Sign Up</h6>
                                    </a>
                                </nav>
                            </tr>
                        </table>
                    </div>
                </td>
                <td class="logo">
                    <a href="./Admin/loginForm.php"><button class="btn">
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


    <!-- main content -->
    <div style="width: 100%;" id="mainCon">


        <!--Create new account details-->
        <marquee>
            <h1 id="heading">Create Your New Account</h1>
        </marquee>
        <hr id="hrline">
        <form method="post" action="./insertSigninDetails.php" id="create_new_account">
            <fieldset>
                <br>

                Full Name <br>
                <input type="text" name="uname" placeholder="Please enter your first and last name" autocomplete="off">
                <br><br>

                Address <br>
                <input type="text" name="uaddress" placeholder="Please enter your current address" autocomplete="off">
                <br><br>

                Contact number <br>
                <input type="text" name="ucontact" placeholder="Please enter your ten digit number" autocomplete="off">
                <br><br>

                Email <br>
                <input type="email" name="uemail" placeholder="Enter valied E-mail" autocomplete="off">
                <br><br>



                date Of Birth <br>
                <input type="date" name="udate">
                <br><br>


                User Name <br>
                <input type="text" name="userName">
                <br><br>

                Password <br>
                <input type="password" name="upassword" placeholder="Enter strong password" autocomplete="off">
                <br><br>


                <input type="submit" value="Submit" onclick="my_function3()">
                <input type="reset" value="Reset" onclick="my_function4()">


            </fieldset>
        </form>



    </div>

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

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>


</body>

</html>