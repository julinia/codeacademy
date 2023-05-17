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

 
  $sql= "SELECT * FROM contact2";
   
  require '../db/dbconnect.php';

  $container= getDataFromDB($sql);




  ?>
  <table border="1px solid black" width="100%">
      <tr>
          <th>Serial_no</th>
          <th>Name</th>
          <th>Phone</th>
          <th>Email</th>
          <th>Subject</th>
          <th>Message</th>
          <th>Action</th>
      </tr>

      <?php 
          foreach($container as $row){
      ?>

              <tr>
                  <td><?php echo $row["serial_no"] ?></td>
                  <td><?php echo $row["name"] ?></td>
                  <td><?php echo $row["phone"] ?></td>
                  <td><?php echo $row["email"] ?></td>
                  <td><?php echo $row["subject"] ?></td>
                  <td><?php echo $row["message"] ?></td>
                  <td><button class="delete"><a href="dlt_contact.php?serial_no=<?php echo $row["serial_no"] ?>">Delete</a></button> </td>



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