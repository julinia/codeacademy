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
      
       <form action="test1.php" method="post">

          <table>

            <tr>
            <th colspan="2" class="form_header">picture</th>          
            </tr>

            <tr>
            <td>
            <label><b>Disease Id</b></label><br>
            <input type="text" name="Disease_id" placeholder="">            
            </td>
            </tr>
            <td>
            <label><b>Test</b></label><br>
            <input type="text" name="test" placeholder="">        
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



