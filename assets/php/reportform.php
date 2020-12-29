<!-- connection from database for report form -->
<?php
  $server = 'localhost';
  $user = 'root';
  $password = '';
  $db = 'covid19';
  $con = mysqli_connect($server, $user, $password, $db);
?>