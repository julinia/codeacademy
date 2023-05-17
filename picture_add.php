<?php

require "../db/db.php";

$Disease_id = $_POST["Disease_id"];
$picture1 = $_FILES["picture1"]["name"];
$picture2 = $_FILES["picture2"]["name"];
$p = $_FILES["picture2"]["name"];

$query="INSERT INTO `picture_add`(`Disease_id`, `picture1`,`picture2`) VALUES ('$Disease_id', '$picture1', '$picture2')";


if($con->query($query) === TRUE){
    echo "Success"; }
   else
    {   
   echo $con->error;       
    }
   

?>