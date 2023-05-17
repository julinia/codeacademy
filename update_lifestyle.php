<?php
$option = $_POST['Option'];
// echo $id;
$sql = "UPDATE lifestyle1 SET $option = '".$_POST['Value']."' WHERE Id = '".$_POST['ID']."'";

include_once('../db/dbconnect.php');
if($con->query($sql) ===  TRUE){
    echo '<script language="javascript">';
    echo 'alert("Teacher Updated Successfully"); location.href="../teacher_list.php"';
    echo '</script>';
    }
    
    else{
        echo $con->Error;
    }

?>