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

 
  $sql= "SELECT * FROM vac_add";
   
  require '../db/dbconnect.php';

  $container= getDataFromDB($sql);




  ?>
  <table border="1px solid black" width="100%">
      <tr>
         
          <th>Serial_No</th>
          <th>Doctor Id</th>
          <th>Date</th>
          <th>Vacation Title</th>
          <th>Vacation Details</th>
        
         
      </tr>

      <?php 
          foreach($container as $row){
      ?>
              <tr>

                  <td><?php echo $row["serial_no"] ?></td>
                  <td><?php echo $row["doc_id"] ?></td>
                  <td><?php echo $row["date"] ?></td>
                  <td><?php echo $row["vtitle"] ?></td>
                  <td><?php echo $row["vdetails"] ?></td>


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