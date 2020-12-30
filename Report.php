<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
  <meta name="description" content="to report a case directly from the website">
  <title>Report a Case</title>
  <!-- icon -->
  <link rel="icon" href="assets/images/logo.png" type="image/gif" sizes="16x16">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- css -->
  <link rel="stylesheet" type="text/css" href="assets/css/index.css">
  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&display=swap" rel="stylesheet">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/fontawesome.min.css" integrity="sha512-kJ30H6g4NGhWopgdseRb8wTsyllFUYIx3hiUwmGAkgA9B/JbzUBDQVr2VVlWGde6sdBVOG7oU8AL35ORDuMm8g==" crossorigin="anonymous" />
</head>
<body>

  <!-- top nav -->
  <nav class="navbar navbar-expand-lg navbar-light sticky-top p-3">
    <a class="navbar-brand" style="color: #007BFF;" href="index.php">
    Covid-19 Tracker
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">World</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           India
          </a>
          <div class="dropdown-menu dropstyle" aria-labelledby="navbarDropdown">
            <a  class="dropdown-item dropstyle" href="india.php">Live Updates</a>
            <a  class="dropdown-item dropstyle" href="indiadaywise.php">Day-Wise Updates</a>
            <a  class="dropdown-item dropstyle" href="statesdaywise.php">States Day-Wise Updates</a>
            <a  class="dropdown-item dropstyle" href="testing.php">Testing</a>
            <a  class="dropdown-item dropstyle" href="population.php">District-Wise Population</a>
          </div>
        </li> 
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Covid-19
          </a>
          <div class="dropdown-menu dropstyle" aria-labelledby="navbarDropdown">
            <a  class="dropdown-item dropstyle" href="covid19.php">About Covid-19</a>
            <a  class="dropdown-item dropstyle" href="symptoms.php">Symptoms</a>
            <a  class="dropdown-item dropstyle" href="prevention.php">Prevention</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="info.php">Info</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- heading -->
  <section class="container-fluid">
    <div class="mb-3 ">
      <h1 class="text-center text-uppercase margin main-text"> Report a Covid-19 Case </h1>
    </div>

    <div class="container">
      <div class ="row">
        <div class="col-lg-8 offset-lg-2 col-12">
          
          <!-- information -->
          <p class="text-center main-text" style="font-size: 12px;">
          Data will be sent to Ministry of Health and Family Welfare, Government of India and nearest Covid Testing Center.
          </p> 

          <!-- report form -->              
          <form action="" method="POST">
            <div class="form-group main-text">
              <label>Full Name</label>
              <input type="text" class="form-control" name="fullname" placeholder="Full Name" autocomplete="off" required>
            </div>
            <div class="form-group main-text">
              <label for="exampleFormControlInput1">Email</label>
              <input type="email" class="form-control" name="email" placeholder="name@example.com" required>
            </div>
            <div class="form-group main-text">
              <label>Contact No.</label>
              <input type="number" class="form-control" name="contactno" placeholder="+91XXXXXXXXXX" autocomplete="off" required >
            </div>
            <div class="main-text">
              <label>Symptoms</label>
              <div>                  
                <div class="custom-control custom-checkbox custom-control-inline">
                  <input type="checkbox" class="custom-control-input" id="customCheck1" name="coronasym[]" value="cold">
                  <label class="custom-control-label" for="customCheck1">Cold</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                  <input type="checkbox" class="custom-control-input" id="customCheck2" name="coronasym[]" value="fever">
                  <label class="custom-control-label" for="customCheck2">Fever</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                  <input type="checkbox" class="custom-control-input" id="customCheck3" name="coronasym[]" value="pneumonia">
                  <label class="custom-control-label" for="customCheck3">Pneumonia</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                  <input type="checkbox" class="custom-control-input" id="customCheck4" name="coronasym[]" value="tiredness">
                  <label class="custom-control-label" for="customCheck4">Tiredness</label>
                </div>
              </div> 
            </div>                              
            <div class="form-group main-text" style="margin-top:10px;">
              <label for="exampleFormControlTextarea1">Other Information</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="info" placeholder="Additional Details" autocomplete="off" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary submit" name="submit">Submit</button>
          </form>
          
          <!-- information -->
          <p class="text-center main-text" style="margin-top:20px; font-size: 12px;">
          Once your data is sent a notification regarding your appointment for Covid-19 test will be sent 
          the provided Email and Phone No.
          </p>
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

  <!-- php for database connection with the form -->
  <?php
    include 'assets/php/reportform.php';
    if(isset($_POST['submit'])){
      $fullname = $_POST['fullname'];
      $email = $_POST['email'];
      $contactno = $_POST['contactno'];
      $symptom = $_POST['coronasym'];
      $info = $_POST['info'];
      $chk = "";
     foreach($symptom as $chk1){
     $chk .= $chk1."," ;
     }
  
     $insertquery = " insert into covidcase(fullname, email, contactno, symptom, info) values('$fullname', '$email', '$contactno', '$chk', '$info')";
     $query = mysqli_query($con, $insertquery);
    if($query){
  ?>

  <script>
    alert("Reported Successfully");
  </script>

  <?php
    }else{
  ?>

  <script>
    alert("Error: Unsucessfull");
  </script>
    
  <?php
    }
    }
  ?>

  <!-- javascript -->       
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

