<?php 
$sql = "UPDATE users SET Status = 'Approved' WHERE UID = '".$_GET['id']."'";
include_once('../db/db.php');

if($con->query($sql) === TRUE){
    echo '<script language="javascript">';
    echo 'alert("Info Added Successfully"); location.href="view_doclist.php"';
    echo '</script>'; }
else
 {
    
echo $con->error;     
 }


?>