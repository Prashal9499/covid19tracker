<!DOCTYPE html> 
<html lang="en">
<head> 
  <!-- required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Covid-19 cases from indian states on per day basis">
  <title>Indian States Day-Wise Updates</title>
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
            <a  class="dropdown-item dropstyle" href="indiadaywise.php">Day-Wise Updates</a>
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
      <h1 class="text-center text-uppercase margin main-text"> covid-19 indian states day-wise updates</h1>
    </div>

    <!-- table -->
    <div class="table-responsive"> 
      <table class=" table table-sm table-dark text-center table-hover table-striped table-bordered" id="tbvalb">
        <tr> 
          <th style="color: #343A40; background-color: #3498DB;" onclick="sortTable(0)">Date</th>
          <th style="color: #343A40; background-color: #F39C12;" onclick="sortTable(2)">Status</th>
          <th style="color: #343A40; background-color: #16A085;">AN</th>
          <th style="color: #343A40; background-color: #16A085;">AP</th>
          <th style="color: #343A40; background-color: #16A085;">AR</th>
          <th style="color: #343A40; background-color: #16A085;">AS</th>
          <th style="color: #343A40; background-color: #16A085;">BR</th>
          <th style="color: #343A40; background-color: #16A085;">CH</th>
          <th style="color: #343A40; background-color: #16A085;">CT</th>
          <th style="color: #343A40; background-color: #16A085;">DD</th>
          <th style="color: #343A40; background-color: #16A085;">DL</th>
          <th style="color: #343A40; background-color: #16A085;">DN</th>
          <th style="color: #343A40; background-color: #16A085;">GA</th>
          <th style="color: #343A40; background-color: #16A085;">GJ</th>
          <th style="color: #343A40; background-color: #16A085;">HP</th>
          <th style="color: #343A40; background-color: #16A085;">HR</th>
          <th style="color: #343A40; background-color: #16A085;">JH</th>
          <th style="color: #343A40; background-color: #16A085;">JK</th>
          <th style="color: #343A40; background-color: #16A085;">KA</th>
          <th style="color: #343A40; background-color: #16A085;">KL</th>
          <th style="color: #343A40; background-color: #16A085;">LA</th>
          <th style="color: #343A40; background-color: #16A085;">LD</th>
          <th style="color: #343A40; background-color: #16A085;">MH</th>
          <th style="color: #343A40; background-color: #16A085;">ML</th>
          <th style="color: #343A40; background-color: #16A085;">MN</th>
          <th style="color: #343A40; background-color: #16A085;">MP</th>
          <th style="color: #343A40; background-color: #16A085;">MZ</th>
          <th style="color: #343A40; background-color: #16A085;">NL</th>
          <th style="color: #343A40; background-color: #16A085;">OR</th>
          <th style="color: #343A40; background-color: #16A085;">PB</th>
          <th style="color: #343A40; background-color: #16A085;">PY</th>
          <th style="color: #343A40; background-color: #16A085;">RJ</th>
          <th style="color: #343A40; background-color: #16A085;">SK</th>
          <th style="color: #343A40; background-color: #16A085;">TG</th>
          <th style="color: #343A40; background-color: #16A085;">TN</th>
          <th style="color: #343A40; background-color: #16A085;">TR</th>
          <th style="color: #343A40; background-color: #16A085;">TT</th>
          <th style="color: #343A40; background-color: #16A085;">UN</th>
          <th style="color: #343A40; background-color: #16A085;">UP</th>
          <th style="color: #343A40; background-color: #16A085;">UT</th>
          <th style="color: #343A40; background-color: #16A085;">WB</th>
        </tr>   

        <!-- php for fetching data from API (Indian States Day-Wise) -->
        <?php 
          $data = file_get_contents('https://api.covid19india.org/states_daily.json');
          $statedaywise = json_decode($data, true);
          $statescount = count($statedaywise['states_daily']);
          $i=1;
          while($i < $statescount){
        ?>

        <tr>
          <td><?php echo $statedaywise['states_daily'][$i]['dateymd'] ?></td>
          <td><?php echo $statedaywise['states_daily'][$i]['status'] ?></td>
          <td><?php echo $statedaywise['states_daily'][$i]['an'] ?></td>
          <td><?php echo $statedaywise['states_daily'][$i]['ap'] ?></td>
          <td><?php echo $statedaywise['states_daily'][$i]['ar'] ?></td>
          <td><?php echo $statedaywise['states_daily'][$i]['as'] ?></td>
          <td><?php echo $statedaywise['states_daily'][$i]['br'] ?></td>
          <td><?php echo $statedaywise['states_daily'][$i]['ch'] ?></td>
          <td><?php echo $statedaywise['states_daily'][$i]['ct'] ?></td>
          <td><?php echo $statedaywise['states_daily'][$i]['dd'] ?></td>
          <td><?php echo $statedaywise['states_daily'][$i]['dl'] ?></td>
          <td><?php echo $statedaywise['states_daily'][$i]['dn'] ?></td>
          <td><?php echo $statedaywise['states_daily'][$i]['ga'] ?></td>
          <td><?php echo $statedaywise['states_daily'][$i]['gj'] ?></td>
          <td><?php echo $statedaywise['states_daily'][$i]['hp'] ?></td>
          <td><?php echo $statedaywise['states_daily'][$i]['hr'] ?></td>
          <td><?php echo $statedaywise['states_daily'][$i]['jh'] ?></td>
          <td><?php echo $statedaywise['states_daily'][$i]['jk'] ?></td>
          <td><?php echo $statedaywise['states_daily'][$i]['ka'] ?></td>
          <td><?php echo $statedaywise['states_daily'][$i]['kl'] ?></td>
          <td><?php echo $statedaywise['states_daily'][$i]['la'] ?></td>
          <td><?php echo $statedaywise['states_daily'][$i]['ld'] ?></td>
          <td><?php echo $statedaywise['states_daily'][$i]['mh'] ?></td>
          <td><?php echo $statedaywise['states_daily'][$i]['ml'] ?></td>
          <td><?php echo $statedaywise['states_daily'][$i]['mn'] ?></td>
          <td><?php echo $statedaywise['states_daily'][$i]['mp'] ?></td>
          <td><?php echo $statedaywise['states_daily'][$i]['mz'] ?></td>
          <td><?php echo $statedaywise['states_daily'][$i]['nl'] ?></td>
          <td><?php echo $statedaywise['states_daily'][$i]['or'] ?></td>
          <td><?php echo $statedaywise['states_daily'][$i]['pb'] ?></td>
          <td><?php echo $statedaywise['states_daily'][$i]['py'] ?></td>
          <td><?php echo $statedaywise['states_daily'][$i]['rj'] ?></td>
          <td><?php echo $statedaywise['states_daily'][$i]['sk'] ?></td>
          <td><?php echo $statedaywise['states_daily'][$i]['tg'] ?></td>
          <td><?php echo $statedaywise['states_daily'][$i]['tn'] ?></td>
          <td><?php echo $statedaywise['states_daily'][$i]['tr'] ?></td>
          <td><?php echo $statedaywise['states_daily'][$i]['tt'] ?></td>
          <td><?php echo $statedaywise['states_daily'][$i]['un'] ?></td>
          <td><?php echo $statedaywise['states_daily'][$i]['up'] ?></td>
          <td><?php echo $statedaywise['states_daily'][$i]['ut'] ?></td>
          <td><?php echo $statedaywise['states_daily'][$i]['wb'] ?></td>
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
  <script src="assets/javascript/tablesort.js"></script>

</body>
</html>