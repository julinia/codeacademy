<?php

require "../db/db.php";

$Symptom_id = $_POST["Symptom_id"];
$Symptom_name=$_POST["Symptom_name"];

$query="INSERT INTO `symptom_add` (`Symptom_id`, `Symptom_name`) VALUES ('$Symptom_id', '$Symptom_name')";


if($con->query($query) === TRUE){
    echo "Success"; }
   else
    {   
   echo $con->error;       
    }
   

?>