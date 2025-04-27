<style>
    button{
        cursor: pointer;
    }
    #nav{
        width: 20%;
        padding:40px 20px 0px 20px;
        border-right: 1px solid black;
        vertical-align:top;
    }
    body{
        background: linear-gradient(0deg, rgb(107, 118, 203) 0%,  rgba(195, 198, 225, 1) 100%);
        height: 100%;
    }
</style>

<?php

echo '<td id="nav">
            <hr>
            <a href=""><button class="leftNavbtn">Dashboard</button></a> <br>
            <hr>
            <a href="./manageUsers_staff.php"><button class="leftNavbtn">Manage Users</button></a> <br>
            <hr>
            <a href=""><button class="leftNavbtn">Manage Suppliers</button></a> <br>
            <hr>
            <a href=""><button class="leftNavbtn">Orders</button></a> <br>
            <hr>
            <a href=""><button class="leftNavbtn">Booking</button></a> <br>
            <hr>
            <a href=""><button class="leftNavbtn">Setting</button></a> <br>
            <hr>
        </td>';

?>