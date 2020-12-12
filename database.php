<!-- session variable for php login -->
<?php
   include('session.php');
?>

<!DOCTYPE html>
<html>

<!-- head section -->

<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Covid-19 Cases Database</title>

    <?php include 'links/links.php'; ?>
    <?php include 'css/styles.php'; ?>
    
</head>

<!-- page body -->

<body>

<!-- top navbar -->
  
<nav class="navbar navbar-expand-lg navbar navbar-dark p-3">

<a class="navbar-brand">
<img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="Covid-19 Tracker">
Covid-19 Tracker
</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item">
      <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<br> <!--line break -->
<br> <!--line break -->
<!-- page title-->

<section class="corona_update container-fluid">
   <div class="mb-3 ">
    <h1 class="text-center text-uppercase h1">Covid-19 Cases Database</h1>
  </div>
<br> <!--line break -->
<br> <!--line break -->

<div class="main-div">
<div class="center-div">
<div style="background-color: #121212" class="table-responsive card">

<table class="table table-dark table-borderless text-left table-hover" style="background-color: #1F1B24" id="tbvalb">
   <tr>
      <th style="color: #BB86FC">ID</th>
      <th style="color: #BB86FC">Full Name</th>
      <th style="color: #BB86FC">Email Id</th>
      <th style="color: #BB86FC">Contact No.</th>
      <th style="color: #BB86FC">Symptoms</th>
      <th style="color: #BB86FC">Information</th>
    </tr> 

<tbody>

<?php

include 'connection.php';

$selectquery = " select * from covidcase ";

$query = mysqli_query($con,$selectquery);

$nums = mysqli_num_rows($query);

while($res = mysqli_fetch_array($query)){
  //echo $res['fullname'] . "<br>";

?>

<tr>
<td><?php echo $res['id']; ?></td>
<td><?php echo $res['fullname']; ?></td>
<td><?php echo $res['email']; ?></td>
<td><?php echo $res['contactno']; ?></td>
<td><?php echo $res['symptom']; ?></td>
<td><?php echo $res['info']; ?></td>
<td> <a href="delete.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="Delete" style="color: #FFFFFF"> <i class="fa fa-trash" aria-hidden="true"></i> </a> </td>

</tr>

<?php

}

?>


</tbody>

</table>
</div>
</div>
</div>


<!-- footer -->

<footer class="mt-5 footer">
    <div class="footer_style text-center container-fluid">
        <p>© Covid-19 Tracker</p>
    </div>
</footer>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>

</body>
</html>