<!-- logout from database to login page -->
<?php
  session_start();
  if(session_destroy()) {
  header("Location: admin.php");
  }
?>