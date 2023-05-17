<?php 
include('../db/dbconnect.php');

$sql = "UPDATE users Status = 'Approved' WHERE serial_no = '".$_POST['id']."'";
if($con->query($sql) ===  TRUE){
    echo '<script language="javascript">';
    echo 'alert("Info updated Successfully"); location.href="approval.php"';
    echo '</script>';
      }
      else{
          echo $con->Error;
      }
?>