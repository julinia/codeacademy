<?php
session_start();
// if ($_SESSION["UserRole"]=="Admin" & $_SESSION["UserRole"]=="Doctor")
if ($_SESSION["UserRole"]=="Admin"){

?> 


<?php

}

else {
    echo "Wrong entry";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Doctor Registration Form</title>
    <link rel="stylesheet" href="../pannel/docregis.css">
</head>
<body>
  
   <div class="mytable">
       <div class="sign">
         
       <form action="../server/general.php" method="post">
          <table>
            <tr>
            <th colspan="2" class="form_header">DOCTOR REGISTREATION FORM</th>          
            </tr>
            <tr>
            <td colspan="2" class="section_header">
            <label><b>Personal Information</b></label>
            </td>
            </tr>
            <tr>
            <td style="margin-right: 10px;">
            <label>First Name</label><br>
            <input type="text" name="fname" placeholder="Enter your first name">            
            </td>
            <td>
            <label>Last Name</label><br>
            <input type="text" name="lname" placeholder="Enter your Last Name">
            </td>
            </tr>

            <tr>
            <td>
            <label>Email</label><br>
            <input type="email" name="email" placeholder="">            
            </td>
            <td>
              <label>Password</label><br>
              <input type="password" name="password" placeholder="">            
              </td>
            </tr>
            <tr>
              <td>
            <label>Mobile No</label><br>
            <input type="number" name="mobile_no" placeholder="">
            </td>
            <td>
            <label>Country</label><br>
            <select name="country" id="">
                <option value="">Select your country<option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Pakistan">Pakistan</option>
                <option value="India">India</option>
                <option value="Chaina">Chaina</option>
                <option value="Mayanmar">Mayanmar</option>
                <option value="Nepal">Nepal</option>
            </select>
            </td>
            </tr>
            <tr>
            <td>
            <label>Gender</label><br>
            <input type="radio" name="gender" value="Male">
            <label>Male</label>&nbsp;
            <input type="radio" name="gender" value="Female">
            <label>Female</label>
            </td>
            </tr>
            <!--<tr><td>
            <label>Are you a citizen of bd?</label><br>
            <select name="" id="">
            <option value="Yes">Yes</option>
            <option value="No">NO</option>
            </select>
            </td>
            </tr>-->
            <tr>
              <td colspan="2" class="section_header">
              <label><b>Education</b></label>
              </td>
              </tr>
           <tr>
           <td>
           <label for="">Degree/Certificate</label><br>
           <select name="certificate" id="">
            <option value="PHD">PHD</option>
            <option value="MS">MS</option>
            <option value="BS">BS</option>
           </select>
           </td>
           <td>
           <label for="">Institute</label><br>
           <input type="text" name="institute" placeholder="Enter Institute">
           </td>
           </tr>
           <tr>
            <td>
              <label>Registration No</label><br>
              <input type="number" name="registration_no" placeholder="">
              </td>
              <td>
                <label>Roll No</label><br>
                <input type="number" name="roll_no" placeholder="">
                </td>

           </tr>
           <tr>
           <td>
           <label for="">Passing Year</label><br>
           <input type="date" name="passing_year" id="">
           </td>
           </tr>
           <tr>
           <td colspan="2" class="section_header">
           <label for=""><b>Experience</b></label>
           </td>
           </tr>
           <tr>
            <td>
              <label>Speciality</label><br>
              <input type="text" name="speciality" placeholder="Enter Speciality">            
            </td>
           <td>
             <label>Title</label><br>
             <input type="text" name="title" placeholder="Enter Title">            
           </td>
           <!--<td>
             <label>Company</label><br>
             <input type="text" name="Company" placeholder="Enter Company Name">
           </td>-->
           </tr>
           <tr>
           <td>
             <label>Experience Duration</label><br>
             <input type="text" name="duration" placeholder="Duration">
           </td>
           </tr>
           <tr>
            <td colspan="2" class="section_header">
            <label for=""><b>Address</b></label>
            </td>
            </tr>
            <tr>
              <td>
                <label>Present address</label><br>
                 <!--<textarea name="present_add" id="" cols="30" rows="10"></textarea>-->
                <input type="address" name="present_add" placeholder="">
              </td>
                <td>
                  <label>Permanent address</label><br>
                  <input type="address" name="permanent_add" placeholder="">
                   <!--<textarea name="permanent_add" cols="30" rows="10"></textarea>-->
                </td>
                </tr>
           <tr>
           <td colspan="2">
             <input type="checkbox" name="agree">
             <label for="">I agreed with terms and conditions</label>
           </td>
           </tr>
           <tr>
           <td colspan="2" class="submit_btn">
              <input type="submit" name="submit" value="Submit">
           </td>
           </tr>
           </table>
             </form>
             
     </div>
   </div> 
   
</body>
</html>