<!-- include header file -->
<?php include("./header.php") ?>

    <fieldset>
    <legend ><b>Booking Information</b></legend>
      <form method="post" action="insert.php">

        <lable for="Name">Name:</lable>
        <input type="text" id="Name" name="pname"><br>

        <lable for="tpno">Tp NO:</lable>
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

<!-- include footer file -->
<?php include("./footer.php") ?>




