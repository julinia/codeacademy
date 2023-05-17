<?php

require "../db/db.php";

$Disease_id = $_POST["Disease_id"];
$disease_definition = $_POST["disease_definition"];

// $query="INSERT INTO `definition1`(`Disease_id`, `disease_definition`) VALUES ('$Disease_id', '$disease_definition')";
$query="INSERT INTO `definition1`(`Disease_id`, `disease_definition`) VALUES ('$Disease_id', '".$disease_definition."')";


if($con->query($query) === TRUE){
    echo "Success"; }
   else
    {   
   echo $con->error;       
    }
   

?>