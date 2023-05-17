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

 
  $sql= "SELECT * FROM app_time";
   
  require '../db/dbconnect.php';

  $container= getDataFromDB($sql);




  ?>
  <table border="1px solid black" width="100%">
      <tr>
          <th>Serial_no</th>
          <th>Appointmenta Id</th>
          <th>Doctor Id</th>
          <th>pPatient Email</th>
          <th>Patient Mobile_no</th>
          <th>Visit Date</th>
          <th>Visit Shedule No </th>
          <th>Status</th>
          <th>Action</th>
        
      </tr>

      <?php 
          foreach($container as $row){
      ?>

              <tr>
                  <td><?php echo $row["serial_no"] ?></td>
                  <td><?php echo $row["app_id"] ?></td>
                  <td><?php echo $row["doc_id"] ?></td>
                  <td><?php echo $row["patient_mail"] ?></td>
                  <td><?php echo $row["patient_phn"] ?></td>
                  <td><?php echo $row["visit_date"] ?></td>
                  <td><?php echo $row["visit_sdlNo"] ?></td>
                  <td><?php echo $row["status"] ?></td>
                  <td><button class="delete"><a href="dlt_apptime.php?serial_no=<?php echo $row["serial_no"] ?>">Delete</a></button> </td>

                

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