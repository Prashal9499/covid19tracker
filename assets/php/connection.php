<!-- databse connection for login and database -->
<?php 
  $username = "root";
  $password = "";
  $server = 'localhost';
  $db = 'covid19';
  $con = mysqli_connect($server,$username,$password,$db);
  if($con){
?>

<script>
  alert('Database Connected');
</script>

<?php
  }else{
    die("Database Connection Failed" . mysqli_connect_error());   
  }
?>