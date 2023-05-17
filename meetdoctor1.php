<?php

require "../db/db.php";

$Disease_id = $_POST["disease_id"];
$w_t_s_a_doctor =$_POST["w.t.s.a_doctor"];

$query="INSERT INTO `meetdoctor`(`Disease_id`, `w_t_s_a_doctor`) VALUES ('$Disease_id ', '$w_t_s_a_doctor')";

if($con->query($query) === TRUE){
    echo "Success"; }
   else
    {   
   echo $con->error;       
    }
   

?>