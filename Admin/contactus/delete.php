<?php
    include '../../DB_Connection.php';


        $id=$_GET['deleteid'];

        $sql="DELETE FROM contact WHERE id='$id'";

        $result=mysqli_query($conn,$sql);
        if($result){
            //echo "deleted successfully";
            header('location:CUdisplay.php');

        }else{
            die(mysqli_error($conn));
        }
    
?>