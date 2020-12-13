<?php
   session_start();
   unset($_SESSION['empID']);
   unset($_SESSION['login_user']);
   unset($_SESSION['type']);
   if(session_destroy()) {
      header("Location: /");
      
   }
?>