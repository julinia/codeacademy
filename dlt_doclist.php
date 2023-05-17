<?php
$id = $_GET["serial_no"];

$sql = "DELETE FROM `add_doc` WHERE `id` = '$id'";
$sql2 = "DELETE FROM `users` WHERE `UID` = '$id'";


include_once('../db/db.php');

if($con->query($sql) === TRUE){
    echo '<script language="javascript">';
    echo 'alert("Info Added Successfully"); location.href="view_doclist.php"';
    echo '</script>';}
   else
    {
       
   echo $con->error;       
    }


?>