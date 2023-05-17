<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Doctor Registration Form</title>
   

<link rel="stylesheet" href="../pannel/admin.css">
<link rel="stylesheet" href="../pannel/adminnav.css">
<style>
     .header2{
         margine: auto;
       height: 18vh;
       width:100%;
     }

     .container{
       height: 82vh;

      overflow-y:auto;
       width:100%;
     }
     
    </style>
</head>
<body>
<div class="header2">

<?php

include'../admin/adi.php';

?></div>


<div class="container">





<?php

 
  $sql= "SELECT * FROM doc_appoinment";
   
  require '../db/dbconnect.php';

  $container= getDataFromDB($sql);




  ?>
  <table border="1px solid black" width="100%">
      <tr>
          <th>Patient name</th>
          <th>Lname</th>
          <th>Id</th>
          <th>Password</th>
          <th>age</th>
          <th>Weight</th>
          <th>Date</th>
          <th>Blood</th>
          <th>Mobile_no</th>
          <th>Time</th>
          <th>Doctor name</th>
          <th>Gender</th>
      </tr>

      <?php 
          foreach($container as $row){
      ?>

              <tr>
                  <td><?php echo $row["pname"]?> </td>
                  <td><?php echo $row["lname"]?> </td>
                  <td><?php echo $row["id"]?> </td>
                  <td><?php echo $row["password"] ?> </td>
                  <td><?php echo $row["age"]?> </td>
                  <td><?php echo $row["weight"]?> </td>
                  <td><?php echo $row["date"]?> </td>
                  <td><?php echo $row["blood"]?> </td>    
                  <td><?php echo $row["mobile_no"]?> </td>
                  <td><?php echo $row["atime"] ?> </td>
                  <td><?php echo $row["dname"] ?> </td>
                  <td><?php echo $row["gender"] ?> </td>

              </tr>

          <?php


          }
          ?>
  </table>

<?php


?>

</div>
    </body>
</html>