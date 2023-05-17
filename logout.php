<?php
 session_start();
 $_SESSION["UserRole"] = "";
 $_SESSION["Email"] = "";
 $_SESSION["flag"] = '';
 header("Location:index.php");
?>