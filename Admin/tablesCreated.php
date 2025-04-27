<?php

// make db connection
require_once "../DB_Connection.php";

// create employee table
$createStaffTable = "CREATE TABLE IF NOT EXISTS employee(
    employee_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    employee_Fname VARCHAR(20) NOT NULL,
    employee_Lname VARCHAR(20) NOT NULL,
    contact_number INT(10) NOT NULL,
    e_mail VARCHAR(25) NOT NULL,
    age INT(10) NOT NULL,
    addres VARCHAR(60) NOT NULL
)";

// Check table is created successfully
if($conn->query($createStaffTable) === TRUE){
    echo "Employee Table Created !";
}else{
    echo "Employee Not Created ".$conn->error;
}

// insert data to the emplyee table
$insertDataEmplyee = "INSERT INTO employee (employee_Fname,employee_Lname,contact_number,e_mail,age,addres) VALUES 
    ('Keshan','udayanga',0778907002,'lmkeshanudayanga@gmail.com',22,'174/3 Madapatha Piliyandala'),
    ('Kusal','Savinda',0759419761,'lmkeshanudayanga@gmail.com',22,'174/3 ABC Rathnapura')
";

if($conn->query($insertDataEmplyee) === TRUE){
    echo "<br>"."Emplyee Table Data Created !";
}else{
    echo "<br>"."Emplyee Data added error !".$conn->error;
}


// create login table
$loginTable = "CREATE TABLE IF NOT EXISTS login_details(
    login_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(20) NOT NULL,
    pssword VARCHAR(20) NOT NULL,
    login_typ VARCHAR(20) NOT NULL
)";

// Check login table is created successfully 
if(mysqli_query($conn,$loginTable)){
    echo "<br>"."Login table successfully created !";
}else{
    echo "<br>"."Login table not created successfully !";
}

// insert data into login table 
$insertDataLoginTable = "INSERT INTO login_details (username,pssword,login_typ) VALUES
    ('Admin','!@#123','Doctor')
";
// chech login details are insert successfullu
if(mysqli_query($conn,$insertDataLoginTable)){
    echo "<br>"."login details inserted";
}else{
    echo "<br>"."login details not inserted";
}




?>