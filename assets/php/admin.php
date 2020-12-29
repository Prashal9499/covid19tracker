<!-- php login -->
<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
  <meta name="description" content="Admin Only">
  <title>Admin Login</title>
  <!-- bootstrap css -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- css -->
  <link rel="stylesheet" type="text/css" href="../css/index.css">
  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/fontawesome.min.css" integrity="sha512-kJ30H6g4NGhWopgdseRb8wTsyllFUYIx3hiUwmGAkgA9B/JbzUBDQVr2VVlWGde6sdBVOG7oU8AL35ORDuMm8g==" crossorigin="anonymous" />
</head>
<body> 
    
  <!-- top nav -->        
  <nav class="navbar navbar-expand-lg navbar navbar-dark p-3"> 
    <a class="navbar-brand" href="../../index.php">
      <img src="../images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="Covid-19 Tracker">Covid-19 Tracker
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
      </ul>
    </div>
  </nav>

  <!-- php connection --> 
  <?php
    include("login.php"); 
    if($_SERVER["REQUEST_METHOD"] == "POST") {  
    $username = mysqli_real_escape_string($db,$_POST['username']); 
    $password = mysqli_real_escape_string($db,$_POST['password']);  
     $sql = "SELECT id FROM login WHERE username = '$username' and password = '$password'"; 
    $result = mysqli_query($db,$sql);
     $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($count == 1) {
    $_SESSION['login_user'] = $username;
  ?>

  <script> 
    alert("Login Successful");
  </script>
  <?php
    header("location: database.php");
    }else {
  ?>

  <script>
    alert("Invalid Username or Password");
  </script>

  <?php
    }
  }
  ?>

  <!-- heading --> 
  <header> 
    <div class="container-fluid pt-5 pb-5">
      <div class=" text-center mb-5 mt-4"> 
        <h1 class="heading">Admin Login</h1> 
      </div>
    </div>
    <div class="container">
      <div class ="row">
        <div class="col-lg-8 offset-lg-2 col-12">
          
          <?php 
            if(@$_GET['Empty']==true)
            {
          ?>

          <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>                                
        
          <?php
            }
          ?>

          <?php 
          if(@$_GET['Invalid']==true)
            {
          ?>

          <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                

          <?php
            }
          ?>

          <!-- login form --> 
          <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" class="icon"> 
            <div class="form-group heading ">
              <label>Username</label>
              <input type="text" class="form-control" name="username" value="" autocomplete="off" placeholder="XXXXXXXX" required>
            </div>
            <div class="form-group heading ">
              <label>Password</label>
              <input type="password" class="form-control" name="password" value="" autocomplete="off" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-dark submit " name="submit">Submit</button>
          </form>
        </div>
      </div> 
    </div>
  </header>
  
  <!-- footer --> 
  <footer class="mt-5 footer"> 
    <div class="footer_style text-center container-fluid">
      <p>© Covid-19 Tracker</p>
    </div>               
  </footer>
          
  <!-- javascript -->       
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>