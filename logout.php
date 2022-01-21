<?php
session_start();

 if(isset($_SESSION['user_id']))
 {
      unset($_SESSION['user_id']);
 }
 //put it outside the function, so whataver it happens it will redirect anyway
 header("Location: login.php");
 die;
?>