<?php include('session.php');?>

<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: login.php");
   }
?>
