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

 
  $sql= "SELECT * FROM test1";
   
  require '../db/dbconnect.php';

  $container= getDataFromDB($sql);




  ?>
  <table border="1px solid black" width="100%">
      <tr>
          <th>Serial_no</th>
          <th>Disease-id</th>
          <th>Test</th>
      </tr>

      <?php 
          foreach($container as $row){
      ?>

              <tr>
                  <td><?php echo $row["Serial_no"] ?></td>
                  <td><?php echo $row["Disease_id"] ?></td>
                  <td><?php echo $row["test"] ?></td>

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