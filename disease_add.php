<?php

require "../db/db.php";

$Disease_id = $_POST["Disease_id"];
$Disease_name=$_POST["Disease_name"];
$Symptom1 = $_POST["Symptom1"];
$Symptom2 = $_POST["Symptom2"];
$Symptom3 = $_POST["Symptom3"];
$Symptom4 = $_POST["Symptom4"];
$Symptom5 = $_POST["Symptom5"];
$Symptom6 = $_POST["Symptom6"];
$Symptom7 = $_POST["Symptom7"];
$Symptom8 = $_POST["Symptom8"];
$Symptom9 = $_POST["Symptom9"];
$Symptom10 = $_POST["Symptom10"];
$Status = $_POST["Status"];
$Added_by = $_POST["Added_by"];
$Approved_by = $_POST["Approved_by"];




// $query="INSERT INTO `doc_app2` (`pname`, `lname`, `id`, `password`, `age`, `weight`, `date`, `blood`, `mobile_no`, `atime`, `dname`, `gender`) VALUES ('$Pname', '$Lname', '$ID', '$Password', '$Age', '$Weight', '$Date', '$Blood', '$Mobile_no', '$Atime', '$Dname', '$Gender')";
$query="INSERT INTO `disease_add` (`Disease_id`, `Disease_name`, `Symptom1`, `Symptom2`, `Symptom3`, `Symptom4`, `Symptom5`, `Symptom6`, `Symptom7`, `Symptom8`, `Symptom9`, `Symptom10`, `Status`, `Added_by`, `Approved_by`) VALUES ('$Disease_id', '$Disease_name', '$Symptom1', '$Symptom2', '$Symptom3', '$Symptom4', '$Symptom5', '$Symptom6', '$Symptom7', '$Symptom8', '$Symptom9', '$Symptom10', '$Status', '$Added_by', '$Approved_by')";



if($con->query($query) === TRUE){
    echo "Success"; }
   else
    {
       
   echo $con->error;       
    }  
?>