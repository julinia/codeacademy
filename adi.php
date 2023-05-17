<?php
   session_start();
  if($_SESSION["UserRole"] == "Admin" AND $_SESSION["flag"] == "Running" ){

?>




<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../pannel/adminnav.css">
<script src="https://kit.fontawesome.com/ce8c39f0e8.js" crossorigin="anonymous"></script>
  <title>Document</title>
</head>
<body>

<div class="menu-bar">
           <div class="menu-bar1">
            <h1>Admin Dashboard</h1>
          </div>
      <ul>

        <li><a href="admin.php"> HOME</li>
      
        <li><a href="#"> REGISTRATION
        <div class="sub-menu-1">
            <ul>
                <li><a href="view_doc.php">DOCTOR REGISTRATION</a></li>
                <li><a href="view_childreg.php">CHILDREN REGISTRATION</a></li>
                <li><a href="view_docapp.php">DOCTOR APPOINTMENT</a></li>
            </ul>
        </div>
        </li>
        <li><a href="#"> CONTACT
            <div class="sub-menu-1">
              <ul>
                <li><a href="view_contact.php">CONTACT INFORMATION</a></li>
             </ul>
           </div>
         </li>
         <li><a href="../logout.php">LOG OUT</a></li>

   </ul>
</div>
</body>
</html>

<?php
  }

  else{
        echo '<script language="javascript">';
        echo 'alert("Invalid Login"); location.href="../login.php"';
        echo '</script>';
  }
  ?>
