<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
  <meta name="description" content="The Covid-19 testing done by indian states till date">
  <title>India Testing</title>
  <!-- bootstrap css -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- css -->
  <link rel="stylesheet" type="text/css" href="assets/css/index.css">
  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/fontawesome.min.css" integrity="sha512-kJ30H6g4NGhWopgdseRb8wTsyllFUYIx3hiUwmGAkgA9B/JbzUBDQVr2VVlWGde6sdBVOG7oU8AL35ORDuMm8g==" crossorigin="anonymous" />   
</head>
<body onload="fetch()">

  <!-- top nav -->
  <nav class="navbar navbar-expand-lg navbar navbar-dark p-3"> 
    <a class="navbar-brand" href="index.php">
      <img src="assets/images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="Covid-19 Tracker">Covid-19 Tracker
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
  <section class="corona_update container-fluid">
    <div class="mb-3 ">
      <h1 class="text-center text-uppercase h1 margin"> covid-19 india testing</h1>
    </div>

    <!-- table -->
    <div style="background-color: #121212" class="table-responsive card">
      <table class=" table table-dark table-borderless text-left table-hover" style="background-color: #1F1B24;" id="tbvalb">
        <tr> 
          <th style="color: #F39C12" onclick="sortTable(0)">Date</th>
          <th style="color: #3498DB" onclick="sortTable(2)">State</th>
          <th style="color: #95A5A6">Total Tested</th>
          <th style="color: #C0392B">Positive</th>
          <th style="color: #2ECC71">Negative</th>
        </tr>   

        <!-- php for fetching data from API (India Testing) -->
        <?php
          $data = file_get_contents('https://api.covid19india.org/state_test_data.json');
          $testing = json_decode($data, true);
          $testingcount = count($testing['states_tested_data']);
          $i=1;
          while($i < $testingcount){
        ?>

        <tr>
          <td><?php echo $testing['states_tested_data'][$i]['updatedon'] ?></td>
          <td><?php echo $testing['states_tested_data'][$i]['state'] ?></td>
          <td><?php echo $testing['states_tested_data'][$i]['totaltested'] ?></td>
          <td><?php echo $testing['states_tested_data'][$i]['positive'] ?></td>
          <td><?php echo $testing['states_tested_data'][$i]['negative'] ?></td>
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
    <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
  </div>

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
  <script src="assets/javascript/topscroller.js"></script>
  <script src="assets/javascript/tablesort.js"></script>

</body>
</html>