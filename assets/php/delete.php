<!-- to delete a query from the database -->
<?php 
  include 'connection.php';
  $id = $_GET['id'];
  $deletequery = " delete from covidcase where id=$id ";
  $query = mysqli_query($con,$deletequery);
  header('location:database.php');
?>