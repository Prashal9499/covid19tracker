<?php
  session_start();
?>

<!DOCTYPE html>
  <html>
    <head> 
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Login</title>
          <?php include 'links/links.php'; ?>
            <?php include 'css/styles.php'; ?>
    </head>

      <body> 
      
        <nav class="navbar navbar-expand-lg navbar navbar-dark p-3"> 
          <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="Covid-19 Tracker">
              Covid-19 Tracker
          </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                </ul>
              </div>
        </nav>
          <br>

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
    <br>
      <br>
        <br>

          <footer class="mt-5 footer"> 
            <div class="footer_style text-center container-fluid">
              <p>© Covid-19 Tracker</p>
                </div>               
                  </footer>
                    
      </body>
</html>