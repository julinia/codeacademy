<!DOCTYPE html>
<html>
<head>

    <title>Test</title>
    <link rel="stylesheet" href="../main_pannel/test.css">
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

  
   <div class="mytable">
     
       <div class="main">
      
       <form action="picture_add.php" method="post" enctype="multipart/form-data">

          <table>
            <tr>
            <th colspan="2" class="form_header">Disease Definition</th>          
            </tr>

            <tr>
            <td>
            <select name="Disease_id">
          <option>Disease Id</option>
          <?php
          $sql = "SELECT * FROM `disease_add`";
          include_once '../db/dbconnect.php';
          $result = getDataFromDB($sql);
          foreach($result as $row){
          ?>
          <option value="<?php echo $row["Disease_id"]; ?>"><?php echo $row["Disease_id"];?></option>
         <?php
          }
         ?>
         </select>           
            </td>
            </tr>
            <tr>
            <td>
            <label><b>picture1</b></label><br>
            <input type="file" name="picture1"> <br>
            </td>
            <td>
            <label><b>picture2</b></label><br>
            <input type="file" name="picture2">        
            </td>
            </tr>
             <div class="mytable2">
            <tr>
            <td colspan="2" class="submit_btn">
            <input type="submit" name="submit" value="Submit">
            </td>
            </tr>
            </div>

            </table>
      </form>
        </div>
     </div>
   </div> 
   
</body>
</html>