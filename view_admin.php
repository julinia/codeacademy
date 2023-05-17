<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
   

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

 
  $sql= "SELECT * FROM admin";
   
  require '../db/dbconnect.php';

  $container= getDataFromDB($sql);




  ?>
  <table border="1px solid black" width="100%">
      <tr>
         
          <th>Fname</th>
          <th>Lname</th>
          <th>UID</th>
          <th>Password</th>
          <th>Email</th>
          <th>Mobile_no</th>
          <th>Gender </th>
        
         
      </tr>

      <?php 
          foreach($container as $row){
      ?>
              <tr>

                  <td><?php echo $row["fname"] ?></td>
                  <td><?php echo $row["lname"] ?></td>
                  <td><?php echo $row["uid"] ?></td>
                  <td><?php echo $row["password"] ?></td>
                  <td><?php echo $row["email"] ?></td>
                  <td><?php echo $row["mobile_no"] ?></td>
                  <td><?php echo $row["gender"] ?></td>


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