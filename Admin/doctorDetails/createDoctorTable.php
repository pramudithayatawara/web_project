<?php

include("../../DB_connection.php");

$createDoctorTable = "CREATE TABLE IF NOT EXISTS doctor (
    Doctor_ID INT AUTO_INCREMENT PRIMARY KEY,
    First_Name VARCHAR (25) NOT NULL,
    Last_Name VARCHAR (25) NOT NULL,
    E_mail VARCHAR (50) NOT NULL,
    Addres VARCHAR (50) NOT NULL,
    Contact_Number INT (10) NOT NULL 
)";

if(mysqli_query ($conn, $createDoctorTable)){
    echo "<br> Table created...";
}
else{
    echo "<br> Table not created...";
}

$insertDoctorDetails = "INSERT INTO doctor VALUES ('', 'Kusal', 'Savinda', 'savindakusal@gmail.com', '331,Dewalayagawa,Kahangama,Rathnapura', 0774940566)";

if(mysqli_query ($conn, $insertDoctorDetails)){
    echo "<br> Data insert...";
}
else{
    echo "<br> Data not insert...";
}

?>