<!DOCTYPE html>
<html lang="en">
<head>
  <!-- required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Covid-19 cases from inida on per day basis">
  <title>India Day-Wise Updates</title>
  <!-- favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
  <!-- web manifest -->
  <link rel="manifest" href="assets/site.webmanifest">
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
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top p-3"> 
    <a class="navbar-brand" style="color: #00FFDE;" href="index.html">
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
          <a class="nav-link" href="index.html">World</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          India
          </a>
          <div class="dropdown-menu dropstyle" aria-labelledby="navbarDropdown">
            <a  class="dropdown-item dropstyle" href="india.php">Live Updates</a>
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
            <a  class="dropdown-item dropstyle" href="covid19.html">About Covid-19</a>
            <a  class="dropdown-item dropstyle" href="symptoms.html">Symptoms</a>
            <a  class="dropdown-item dropstyle" href="prevention.html">Prevention</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="info.html">Info</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- heading -->
  <section class="container-fluid">
    <div class="mb-3 ">
      <h1 class="text-center text-uppercase margin main-text"> covid-19 india day-wise updates</h1>
    </div>

    <!-- table -->
    <div class="table-responsive">
      <table class=" table table-sm table-dark text-center table-hover table-striped table-bordered" id="tbl">
        <tr class="text-capitalize">
          <th style="color: #343A40; background-color: #3498DB">Date and Month</th>
          <th style="color: #343A40; background-color: #E74C3C;">daily confirmed</th>
          <th style="color: #343A40; background-color: #95A5A6;">daily deceased</th>
          <th style="color: #343A40; background-color: #2ECC71;">daily recovered</th>
          <th style="color: #343A40; background-color: #E74C3C;">total confirmed</th>
          <th style="color: #343A40; background-color: #95A5A6;">total deceased</th>
          <th style="color: #343A40; background-color: #2ECC71;">total recovered</th>
        </tr>

        <!-- php code for fetching API (India Day-Wise) -->
        <?php
          $data = file_get_contents('https://api.covid19india.org/data.json');
          $daywise = json_decode($data, true);
          $totalcount = count($daywise['cases_time_series']);
          $i=0;
          while ($i <  $totalcount){ 
        ?>

        <tr class="mb-5">
          <td><?php echo $daywise['cases_time_series'][$i] ['date'] . "<br>" ; ?> </td>
          <td><?php echo $daywise['cases_time_series'][$i] ['dailyconfirmed'] . "<br>" ; ?></td> 
          <td><?php echo $daywise['cases_time_series'][$i] ['dailydeceased'] . "<br>" ; ?></td>
          <td><?php echo $daywise['cases_time_series'][$i] ['dailyrecovered'] . "<br>" ; ?></td>
          <td><?php echo $daywise['cases_time_series'][$i] ['totalconfirmed'] . "<br>" ; ?></td>
          <td><?php echo $daywise['cases_time_series'][$i] ['totaldeceased'] . "<br>" ; ?></td>
          <td><?php echo $daywise['cases_time_series'][$i] ['totalrecovered'] . "<br>" ; ?></td>
        </tr>

        <?php
          $i++;
          }
        ?>

      </table>
    </div>
  </section>
  
  <!-- top scroller -->
  <div class="container scrolltop float-right pr-5">
    <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"> </i>
  </div>
  
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
  <script src="assets/javascript/topscroller.js"></script>
  
</body>
</html>