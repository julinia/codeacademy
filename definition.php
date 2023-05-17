<!DOCTYPE html>
<html>
<head>

    <title>definition</title>
    <link rel="stylesheet" href="../main_pannel/definition.css">
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

</head>
<body>
  
   <div class="mytable">
       <div class="main">
      
       <form action="definition1.php" method="post">

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

            <label><b>Disease Definition</b></label><br>
            <textarea name="disease_definition" id="" cols="30" rows="10"></textarea>
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