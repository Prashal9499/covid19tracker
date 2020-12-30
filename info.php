<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
  <meta name="description" content="some useful information about the website">
  <title>Information</title>
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
          <a class="nav-link" href="report.php">Report</a>
        </li>
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
          <a class="nav-link" href="assets/php/admin.php">Login</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- heading -->
  <section class="container-fluid">
    <div class="mb-3 ">
      <h1 class="text-center text-uppercase margin main-text"> Information </h1>
    </div>

    <!-- main content -->
    <div class="container-fluid">                               
      <p class="text-center main-text" style="margin-bottom: 20px;">Are you official ?</p>
      <p class="text-center" style="margin-bottom: 20px;">No.</p>                     
      <p class="text-center main-text" style="margin-bottom: 20px;"> What are your sources? How is the data gathered for this project? </p>
      <p class="text-center " style="margin-bottom: 20px;">We are using different APIs.</p>                          
      <p class="text-center main-text" style="margin-bottom: 20px;"> Why does Covid-19 Tracker have difference in numbers compared to MOHFW website? </p>
      <p class="text-center" style="margin-bottom: 20px;">MoHFW updates the data at a scheduled time. However, we update them based on different APIs. These are generally more recent.</p>                                
      <p class="text-center main-text" style="margin-bottom: 20px;">Where can I find the data for this?</p>
      <p class="text-center" style="margin-bottom: 20px;">All the data is available through different APIs. <a href="apilist.php">(list of APIs Used)</a></p>                                        
      <p class="text-center main-text" style="margin-bottom: 20px;">Who are you?</p>
      <p class="text-center" style="margin-bottom: 20px;"> I am <a href="https://prashal9499.github.io" target="_blank">Prashal Tarkas</a> (creator of this website) a student who likes to work on different projects.</p>
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

</body>
</html>