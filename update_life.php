<?php
$id = $_GET["Serial_No"];

$sql = "UPDATE FROM `lifestyle1` WHERE `Serial_No` = '$id'";
// $Serial_No=$_GET['Serial_No'];

include_once('../db/db.php');

if($con->query($sql) === TRUE){
    echo "Success"; }
   else
    {
       
   echo $con->error;       
    }
   

// mysqli_query($con,$sql );


// header("location:http://localhost/new/Child%20Healthcare/admin/view_lifestyle.php");


?>