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

 
  $sql= "SELECT * FROM users";
   
  require '../db/dbconnect.php';

  $container= getDataFromDB($sql);




  ?>
  <table border="1px solid black" width="100%">
      <tr>
         
          <th>Serial_No</th>
          <th>UID</th>
          <th>Email</th>
          <th>Password</th>
          <th>UserRole</th>
          <th>Status</th>
          <th>AddedOn </th>
          <th>Action</th>
        
         
      </tr>

      <?php 
          foreach($container as $row){
      ?>
              <tr>

                  <td><?php echo $row["SerialNo"] ?></td>
                  <td><?php echo $row["UID"] ?></td>
                  <td><?php echo $row["Email"] ?></td>
                  <td><?php echo $row["Password"] ?></td>
                  <td><?php echo $row["UserRole"] ?></td>
                  <td><?php echo $row["Status"] ?></td>
                  <td><?php echo $row["AddedOn"] ?></td>
                   <td> <button class="delete"><a href="dlt_users.php?SerialNo=<?php echo $row["SerialNo"] ?>">Delete</a></button> </td>


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