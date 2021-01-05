<!-- php login -->
<?php
  include('session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Database access for deleting and updating query">
  <title>Covid-19 Cases Database</title>
  <!-- favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="../images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon/favicon-16x16.png">
  <!-- web manifest -->
  <link rel="manifest" href="../site.webmanifest">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- css -->
  <link rel="stylesheet" type="text/css" href="../css/index.css">
  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&display=swap" rel="stylesheet">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/fontawesome.min.css" integrity="sha512-kJ30H6g4NGhWopgdseRb8wTsyllFUYIx3hiUwmGAkgA9B/JbzUBDQVr2VVlWGde6sdBVOG7oU8AL35ORDuMm8g==" crossorigin="anonymous" />
</head>
<body> 
  <!-- top nav -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top p-3">
    <a class="navbar-brand" style="color: #FA8072;">
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
          
  <!-- heading -->
  <section class="container-fluid"> 
    <div class="mb-3 ">
      <h1 class="text-center text-uppercase margin main-text">Covid-19 Cases Database</h1>
    </div>
                 
    <!-- table -->
    <div class="main-div">
      <div class="center-div">
        <div class="table-responsive">
          <table class="table table-sm table-dark text-left table-hover table-striped table-bordered" id="tbvalb">
            <tr> 
              <th style="color: #343A40; background-color: #C0392B;">ID</th> 
              <th style="color: #343A40; background-color: #2ECC71;">Full Name</th>
              <th style="color: #343A40; background-color: #3498DB;">Email Id</th>
              <th style="color: #343A40; background-color: #9B59B6;">Contact No.</th>
              <th style="color: #343A40; background-color: #E74C3C;">Symptoms</th>
              <th style="color: #343A40; background-color: #E67E22;">Information</th>
              <th style="color: #343A40; background-color: #E67E22;"></th>
            </tr> 
            <tbody> 

            <!-- php for fetching database -->
            <?php 
              include 'connection.php';
              $selectquery = " select * from covidcase ";
              $query = mysqli_query($con,$selectquery);
              $nums = mysqli_num_rows($query);
              while($res = mysqli_fetch_array($query)){
            ?>

              <tr>
                <td><?php echo $res['id']; ?></td>
                <td><?php echo $res['fullname']; ?></td>
                <td><?php echo $res['email']; ?></td>
                <td><?php echo $res['contactno']; ?></td>
                <td><?php echo $res['symptom']; ?></td>
                <td><?php echo $res['info']; ?></td>
                <td><a href="delete.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash main-text" aria-hidden="true"></i></a></td>
              </tr>

              <?php
                }
                if($con){
              ?>
                  
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success !</strong> Database connected.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                  
              <?php
                }else{
                  die("Database Connection Failed" . mysqli_connect_error());   
                }
              ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

  <!-- footer -->
  <footer> 
    <div class="footer_style text-center container-fluid main-text">
      <p>© Covid-19 Tracker</p>
    </div>
  </footer>

  <!-- javascript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="assets/javascript/delete.js"></script>

</body>
</html>