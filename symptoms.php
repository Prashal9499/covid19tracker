<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
  <meta name="description" content="Information regarding the symptoms of coronavirus">
  <title>Symptoms</title>
  <!-- icon -->
  <link rel="icon" href="assets/images/logo.png" type="image/png" sizes="16x16">
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
            <a class="dropdown-item dropstyle" href="covid19.php">About Covid-19</a>
            <a class="dropdown-item dropstyle" href="prevention.php">Prevention</a>
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
      <h1 class="text-center text-uppercase margin main-text"> Symptoms </h1>
    </div>

    <!-- section 1 -->               
    <div class="container"> 
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <figure class ="text-center">
            <img src="assets/images/cough.png" class="img-fluid" width="120" height="120">                   
            <figcaption style="margin-top: 20px;">Cough</figcaption> 
          </figure>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <figure class ="text-center">
            <img src="assets/images/fever.png" class="img-fluid" width="120" height="120">                    
            <figcaption style="margin-top: 20px;">Fever</figcaption> 
          </figure>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <figure class ="text-center">
            <img src="assets/images/sneezing.png" class="img-fluid" width="120" height="120">                     
            <figcaption style="margin-top: 20px;">Sneezing</figcaption> 
          </figure>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <figure class ="text-center">
            <img src="assets/images/difficulty-breathing.png" class="img-fluid" width="120" height="120">                   
            <figcaption style="margin-top: 20px;">Difficulty Breathing</figcaption> 
          </figure>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <figure class ="text-center">
            <img src="assets/images/tiredness.png" class="img-fluid" width="120" height="120">                                       
            <figcaption style="margin-top: 20px;">Tiredness</figcaption> 
          </figure>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <figure class ="text-center">
            <img src="assets/images/diarrhea.png" class="img-fluid" width="120" height="120">                                       
            <figcaption style="margin-top: 20px;">Diarrhea</figcaption>
          </figure>
        </div>
      </div>
    </div>

    <!-- section 2 -->                           
    <div class="container-fluid"> 
      <p class="text-center text-margin">
      Symptoms of COVID-19 are variable, but usually include fever and a cough. People with the same infection may have different 
      symptoms, and their symptoms may change over time. For example, one person may have a high fever, a cough, and fatigue, and 
      another person may have a low fever at the start of the disease and develop difficulty breathing a week later. However, in people
      without prior ears, nose, and throat (ENT) disorders, loss of taste combined with loss of smell is associated with COVID-19 with 
      a specificity of 95%.
      </p>
      <p class="text-center text-margin">
      Some symptoms of COVID-19 can be relatively non-specific; the two most common symptoms are fever (88 percent) and dry cough 
      (68 percent). Among those who develop symptoms, approximately one in five may become more seriously ill and have difficulty in 
      breathing. Emergency symptoms include difficulty breathing, persistent chest pain or pressure, sudden confusion, difficulty waking,
      and bluish face or lips; immediate medical attention is advised if these symptoms are present. Further development of the disease 
      can lead to complications including pneumonia, acute respiratory distress syndrome, sepsis, septic shock, and kidney failure.
      </p>
      <p class="text-center text-margin">
      As is common with infections, there is a delay, known as the incubation period, between the moment a person first becomes infected
      and the appearance of the first symptoms. The median incubation period for COVID-19 is four to five days. Most symptomatic people 
      experience symptoms within two to seven days after exposure, and almost all symptomatic people will experience one or more symptoms
      before day twelve 
      </p>
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