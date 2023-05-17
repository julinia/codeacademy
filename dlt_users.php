<?php
$id = $_GET["SerialNo"];

$sql = "DELETE FROM `users` WHERE `SerialNo` = '$id'";
// $Serial_No=$_GET['Serial_No'];

include_once('../db/db.php');

if($con->query($sql) === TRUE){
    echo "Success"; }
   else
    {
       
   echo $con->error;       
    }
   

// mysqli_query($con,$sql );


// header("http://localhost/new/Child%20Healthcare/admin/view_users.php");


?>