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

 
  $sql= "SELECT * FROM child_app";
   
  require '../db/dbconnect.php';

  $container= getDataFromDB($sql);




  ?>
  <table border="1px solid black" width="100%">
      <tr>
          <th>Serial_no</th>
          <th>Id</th>
          <th>Fname</th>
          <th>Lname</th>
          <th>Age</th>
          <th>Weight</th>
          <th>Gender</th>
          <th>Date</th>
          <th>Fothers Name </th>
          <th>Mothers Name</th>
          <th>Email</th>
          <th>Addres</th>
          <th>Mobile_no</th>
          <th>Patient</th>
          <th>Doctor Id</th>
          <th>Status</th>
      </tr>

      <?php 
          foreach($container as $row){
      ?>

              <tr>
                  <td><?php echo $row["serial_no"] ?></td>
                  <td><?php echo $row["id"] ?></td>
                  <td><?php echo $row["fname"] ?></td>
                  <td><?php echo $row["lname"] ?></td>
                  <td><?php echo $row["age"] ?></td>
                  <td><?php echo $row["weight"] ?></td>
                  <td><?php echo $row["gender"] ?></td>
                  <td><?php echo $row["date"] ?></td>
                  <td><?php echo $row["fa_name"] ?></td>
                  <td><?php echo $row["mo_name"] ?></td>    
                  <td><?php echo $row["email"] ?></td>
                  <td><?php echo $row["address"] ?></td>
                  <td><?php echo $row["mobile"] ?></td>
                  <td><?php echo $row["patient"] ?></td>
                  <td><?php echo $row["doc_id"] ?></td>
                  <td><button class="delete"><a href="dlt_childreg.php?serial_no=<?php echo $row["serial_no"] ?>">Delete</a></button> </td>




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