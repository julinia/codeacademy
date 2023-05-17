<?php
$id = $_GET["serial_no"];

$sql = "DELETE FROM `child_app` WHERE `serial_no` = '$id'";
// $Serial_No=$_GET['Serial_No'];

include_once('../db/db.php');

if($con->query($sql) === TRUE){
    echo '<script language="javascript">';
    echo 'alert("Info Added Successfully"); location.href="view_childreg.php"';
    echo '</script>'; }
   else
    {
       
   echo $con->error;       
    }
   

// mysqli_query($con,$sql );


// header("location:http://localhost/new/Child%20Healthcare/admin/view_lifestyle.php");


?>