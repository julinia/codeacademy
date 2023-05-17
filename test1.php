<?php

require "../db/db.php";

$Disease_id = $_POST["Disease_id"];
$test=$_POST["test"];

$query="INSERT INTO `test1`(`Disease_id`, `test`) VALUES ('$Disease_id', '$test')";


if($con->query($query) === TRUE){
    echo "Success"; }
   else
    {   
   echo $con->error;       
    }
   

?>