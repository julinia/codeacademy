
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

 
  $sql= "SELECT * FROM disease_add";
   
  require '../db/dbconnect.php';

  // $newdb = mysqli_connect('localhost', 'root', '', 'project1');
  // $result = mysqli_query($newdb,$sql) or die(mysqli_error($newdb));
  // $container = array();

  // while ($a = mysqli_fetch_assoc($result)) {
  //   $container[] = $a;
  // }
  $container= getDataFromDB($sql);
  ?>
  <table border="1px solid black" width="100%">
      <tr>
          <th>SerialNo</th>
          <th>Disease_id</th>
          <th>Disease_name</th>
          <th>Symptom1</th>
          <th>Symptom2</th>
          <th>Symptom3</th>
          <th>Symptom4</th>
          <th>Symptom5</th>
          <th>Symptom6</th>
          <th>Symptom7</th>
          <th>Symptom8</th>
          <th>Symptom9</th>
          <th>Symptom10</th>
          <th>Status</th>
          <th>Added_by</th>
          <th>Approved_by</th>
      </tr>

      <?php 
          foreach($container as $row){
      ?>

              <tr>
                  <td><?php echo $row["SerialNo"] ?></td>
                  <td><?php echo $row["Disease_id"] ?></td>
                  <td><?php echo $row["Disease_name"] ?></td>
                  <td><?php echo $row["Symptom1"] ?></td>
                  <td><?php echo $row["Symptom2"] ?></td>
                  <td><?php echo $row["Symptom3"] ?></td>
                  <td><?php echo $row["Symptom4"] ?></td>
                  <td><?php echo $row["Symptom5"] ?></td>
                  <td><?php echo $row["Symptom6"] ?></td>
                  <td><?php echo $row["Symptom7"] ?></td>
                  <td><?php echo $row["Symptom8"] ?></td>
                  <td><?php echo $row["Symptom9"] ?></td>
                  <td><?php echo $row["Symptom10"] ?></td>
                  <td><?php echo $row["Status"] ?></td>
                  <td><?php echo $row["Added_by"] ?></td>
                  <td><?php echo $row["Approved_by"] ?></td> 

              </tr>

          <?php

          }
          ?>
  </table>

<?php


//   foreach($container as $row){

//     echo'<h2>'.$row["SerialNo"].'</h2>';
//     echo'<h2>'.$row["Disease_id"].'</h2>';
//     echo'<h2>'.$row["Disease_name"].'</h2>';
//     echo'<h2>'.$row["Symptom1"].'</h2>';
//     echo'<h2>'.$row["Symptom2"].'</h2>';
//     echo'<h2>'.$row["Symptom3"].'</h2>';
//     echo'<h2>'.$row["Symptom4"].'</h2>';
//     echo'<h2>'.$row["Symptom5"].'</h2>';
//     echo'<h2>'.$row["Symptom6"].'</h2>';
//     echo'<h2>'.$row["Symptom7"].'</h2>';
//     echo'<h2>'.$row["Symptom8"].'</h2>';
//     echo'<h2>'.$row["Symptom9"].'</h2>';
//     echo'<h2>'.$row["Symptom10"].'</h2>';
//     echo'<h2>'.$row["Status"].'</h2>';
//     echo'<h2>'.$row["Added_by"].'</h2>';
//     echo'<h2>'.$row["Approved_by"].'</h2>';
    







//   }
//   return $container;


?>

</div>
    </body>
</html>