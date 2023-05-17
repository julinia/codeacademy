
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Folder</title>
   

<link rel="stylesheet" href="../pannel/admin.css">
<link rel="stylesheet" href="../pannel/adminnav.css">
<style>
     .header2{
         margine: auto;
       height: 18vh;
       width:100%;
     }

     .container{
       height: auto;
       width:100%;
     }
     
    </style>
</head>
<body>
<div class="header2">

<?php


include'adi.php';

?></div>


<div class="container">

    <h1>DISEASE INFORMATION</h1>
        <ul>
            <li> <div class="bottom"><a href="view_admin.php"><b>Users</b></a></div> </li>
            <li> <div class="bottom"><a href="view_symptom.php"><b>Symptom Information</b></a></div></li>
            <li> <div class="bottom"><a href="view_disease.php"><b>Disease Information</b></a></div></li>
            <li> <div class="bottom"><a href="view_definition.php"><b>Disease Definition</b></a></div> </li>
            
        </ul>

        <h1>INFORMATION VIEW</h1>
        <ul>
            <li> <div class="bottom"><a href="view_meetdoc.php"><b>Meet Doctor</b></a></div> </li>
            <li> <div class="bottom"><a href="view_test.php"><b>Test Information</b></a></div> </li>
            <li> <div class="bottom"><a href="view_treatment.php"><b>Treatment Information</b></a></div> </li>
            <li> <div class="bottom"><a href="view_lifestyle.php"><b>Lifestyle Information</b></a></div> </li>
        </ul>


           <h1>INFORMATION FORM</h1>
           <ul>
            <li> <div class="bottom"><a href="definition.php"><b>Definition Form</b></a></div> </li>
            <li> <div class="bottom"><a href="disease.php"><b>Disease Form</b></a></div> </li>
            <li> <div class="bottom"><a href="symptom.php"><b>Symptom Form</b></a></div> </li>
            <li> <div class="bottom"><a href="picture.php"><b>Picture Form</b></a></div> </li>
           </ul>

           <ul>
            <li> <div class="bottom"><a href="meetdoctor.php"><b>Meet Doctor Form</b></a></div> </li>
            <li> <div class="bottom"><a href="test.php"><b>Test Form</b></a></div> </li>
            <li> <div class="bottom"><a href="treatment.php"><b>Treatment Form</b></a></div> </li>
            <li> <div class="bottom"><a href="lifestyle.php"><b>Lifestyle Form</b></a></div> </li>
           </ul>

           <h1> APPOINTMENT INFORMATION </h1>
           <ul>
            <li> <div class="bottom"><a href="view_users.php"><b>Types Of Users</b></a></div> </li>
            <li> <div class="bottom"><a href="view_vac.php"><b>Vacation</b></a></div> </li>
            <!-- <li> <div class="bottom"><a href="admin.php"><b>Appruve</b></a></div> </li> -->
            <li> <div class="bottom"><a href="View_childreg.php"><b>Number of patient </b></a></div> </li>
           </ul>

            <ul>
             <li> <div class="bottom"><a href="view_apptime.php"><b>Appointment Time</b></a></div> </li>
             <li> <div class="bottom"><a href="view_doclist.php"><b>Doctor List</b></a></div> </li>
            </ul>
            
    </div>
    </body>
</html>

