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

     tr{
      border:5px solid black;

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

 
  $sql= "SELECT * FROM lifestyle1";
   
  require '../db/dbconnect.php';

  $container= getDataFromDB($sql);




  ?>
  <table border="5px solid black" width="100%">
  <!-- <table class="table table-bordered table-striped"> -->
      <tr>
          <th>Serial_no</th>
          <th>Disease-id</th>
          <th>Life style</th>
          <th>Action</th>
      </tr>

      <?php 
          foreach($container as $row){
      ?>

              <tr>
                  <td><?php echo $row["Serial_No"] ?></td>
                  <td><?php echo $row["Disease_id"] ?></td>
                  <td><?php echo $row["lifestyle"] ?></td>

                  <td> 
                    <button class="update"><a href="update_lifestyle.php?Id=<?php echo $row["Id"] ?>">Update</a></button>
                   <button class="delete"><a href="dlt_lifestyle.php?Serial_No=<?php echo $row["Serial_No"] ?>">Delete</a></button> </td>

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