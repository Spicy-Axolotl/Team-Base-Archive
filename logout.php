<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   unset($_SESSION["loggedin"]);
   
   echo 'You have cleaned session';
   header('Refresh: 1; URL = login.php');
?>