<?php

require "../db/db.php";

$Disease_id = $_POST["Disease_id"];
$lifestyle = $_POST["lifestyle"];

$query="INSERT INTO `lifestyle1`(`Disease_id`, `lifestyle`) VALUES ('$Disease_id', '$lifestyle')";


if($con->query($query) === TRUE){
    echo "Success"; }
   else
    {   
   echo $con->error;       
    }
   

?>