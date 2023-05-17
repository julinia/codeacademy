<!DOCTYPE html>
<html>
<head>

    <title>Doctor Appointment Form</title>
    <link rel="stylesheet" href="../main_pannel/disease.css">
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
      
       <form action="disease_add.php" method="post">

          <table>

            <tr>
            <th colspan="2" class="form_header">Disease</th>          
            </tr>

            <tr>
            <td>
            <label><b>Disease ID</b></label><br>
            <input type="text" name="Disease_id" placeholder="">            
            </td>
            <td>
            <label><b> Disease Name</b></label><br>
            <input type="text" name=" Disease_name" placeholder="">        
            </td>
            </tr>

            <tr>
            <td>
            <label><b>Symptom1</b></label><br>
            <input type="text" name="Symptom1" placeholder="">        
            </td>
            
            <td>
            <label><b>Symptom2</b></label><br>
            <input type="text" name="Symptom2" placeholder="">        
            </td>
            </tr>

            <tr>
            <td>
            <label><b>Symptom3</b></label><br>
            <input type="text" name="Symptom3" placeholder="">        
            </td>
           
            <td>
            <label><b>Symptom4</b></label><br>
            <input type="text" name="Symptom4" placeholder="">        
            </td>
            </tr>

            <tr>
            <td>
            <label><b>Symptom5</b></label><br>
            <input type="text" name="Symptom5" placeholder="">        
            </td>
            
            <td>
            <label><b>Symptom6</b></label><br>
            <input type="text" name="Symptom6" placeholder="">        
            </td>
            </tr>


            <tr>
            <td>
            <label><b>Symptom7</b></label><br>
            <input type="text" name="Symptom7" placeholder="">        
            </td>
           
            <td>
            <label><b>Symptom8</b></label><br>
            <input type="text" name="Symptom8" placeholder="">        
            </td>
            </tr>


            <tr>
            <td>
            <label><b>Symptom9</b></label><br>
            <input type="text" name="Symptom9" placeholder="">        
            </td>
            
            <td>
            <label><b>Symptom10</b></label><br>
            <input type="text" name="Symptom10" placeholder="">        
            </td>
            </tr>

            <tr>
            <td>
            <label><b>Status</b></label><br>
            <input type="text" name="Status" placeholder="">        
            </td>
            </tr>


            <tr>
            <td>
            <label><b>Added by</b></label><br>
            <input type="text" name="Added_by" placeholder="">        
            </td>
            </tr>

            <tr>
            <td>
            <label><b>Approved by</b></label><br>
            <input type="text" name="Approved_by" placeholder="">        
            </td>
            </tr>

            <!-- <tr>
            <td>
            <label><b>Added on</b></label><br>
            <input type="time" name="Adden_on" placeholder="">        
            </td>
            </tr> -->


            <tr>
            <td colspan="2" class="submit_btn">
            <input type="submit" name="submit" value="Submit">
            </td>
            </tr>


            </table>
      </form>
        </div>
     </div>
   </div> 
   
</body>
</html>