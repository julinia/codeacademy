<?php

require "../db/db.php";

$Disease_id = $_POST["disease_id"];
$treatment = $_POST["treatment"];

$query="INSERT INTO `treatment1`(`Diease_id`, `treatment`) VALUES ('$Disease_id', '$treatment')";

if($con->query($query) === TRUE){
    echo "Success"; }
   else
    {   
   echo $con->error;       
    }
   
?>