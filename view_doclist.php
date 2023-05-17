<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Doctor Registration Form</title>
   

<link rel="stylesheet" href="../pannel/admin.css">
<link rel="stylesheet" href="../pannel/adminnav.css">
<style>
     .header2{
         margin: auto;
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

 
  $sql= "SELECT * FROM add_doc inner join users on users.UID = add_doc.id";
   
  require '../db/dbconnect.php';

  $container= getDataFromDB($sql);




  ?>
  <table border="1px solid black" width="100%">
      <tr>
          <th>Serial_no</th>
          <th>Fname</th>
          <th>Lname</th>
          <th>Email</th>
          <th>Password</th>
          <th>Mobile_no</th>
          <th>Information</th>
          <th>Gender </th>
          <th>Certificate</th>
          <th>Institute</th>
          <th>Registration_no</th>
          <th>Roll_no</th>
          <th>Passing_year</th>
          <th>Speciality</th>
          <th>Title</th>
          <th>Duration</th>
          <th>Present_add</th>
          <th>Permanent_add</th>
          <th>Action</th>
          <th>Delete</th>
      </tr>

      <?php 
          foreach($container as $row){
      ?>

              <tr>
                  <td><?php echo $row["serial_no"] ?></td>
                  <td><?php echo $row["fname"] ?></td>
                  <td><?php echo $row["lname"] ?></td>
                  <td><?php echo $row["email"] ?></td>
                  <td><?php echo $row["password"] ?></td>
                  <td><?php echo $row["mobile_no"] ?></td>
                  <td><?php echo $row["country"] ?></td>
                  <td><?php echo $row["gender"] ?></td>
                  <td><?php echo $row["certificate"] ?></td>
                  <td><?php echo $row["institute"] ?></td>
                  <td><?php echo $row["registration_no"] ?></td>
                  <td><?php echo $row["roll_no"] ?></td>
                  <td><?php echo $row["passing_year"] ?></td>
                  <td><?php echo $row["speciality"] ?></td>
                  <td><?php echo $row["title"] ?></td>
                  <td><?php echo $row["duration"] ?></td>
                  <td><?php echo $row["present_add"] ?></td>
                  <td><?php echo $row["permanent_add"] ?></td>
                  <td><?php if($row["Status"] == 'Pending'){
                        ?>
                  <a class="btn btn-sm btn-info" style=" background:green;" href="view_doc2.php?id=<?php echo $row["UID"] ?>">Approve</a></td>      
                        <?php
      }            else{
                                echo $row["Status"];
                            }
                    ?>
                  
                  
                  <td><button class="delete"><a href="dlt_doclist.php?serial_no=<?php echo $row["UID"] ?>">Delete</a></button> </td>
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