<!DOCTYPE html> 
<html lang="en">
<head> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
  <meta name="description" content="APIs that are used to built this project">
  <title>APIs Used</title>
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
<body>

  <!-- top nav -->
  <nav class="navbar navbar-expand-lg navbar-light sticky-top p-3"> 
    <a class="navbar-brand" style="color: #007BFF;" href="index.php">
    Covid-19 Tracker
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
      </ul>
    </div>
  </nav>
           
  <!-- heading -->
  <section class="container-fluid">
  <div class="mb-3 ">
    <h1 class="text-center main-text margin"> APIs USED </h1>
  </div> 
                  
  <!-- table -->                  
  <div class="main-div">
    <div class="center-div">
      <div class="table-responsive">
        <table class="table table-sm table-light text-left table-hover table-striped table-bordered" id="tbvalb">
          <thead>
            <tr>
              <th scope="col" style="color: #FFFFFF; background-color: #C0392B;">S No.</th> 
              <th scope="col" style="color: #FFFFFF; background-color: #2ECC71;">Data APIs</th>
              <th scope="col" style="color: #FFFFFF; background-color: #3498DB;">URL</th>
              <th scope="col" style="color: #FFFFFF; background-color: #F1C40F;">Status</th>
            </tr> 
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>World</td>
              <td><a href="https://api.covid19api.com/summary" target="_blank">https://api.covid19api.com/summary</a></td>
              <td>Active</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>India</td>
              <td><a href="https://api.covid19india.org/data.json" target="_blank">https://api.covid19india.org/data.json</a></td>
              <td>Active</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>India Day-Wise</td>
              <td><a href="https://api.covid19india.org/data.json" target="_blank">https://api.covid19india.org/data.json</a></td>
              <td>Active</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>India States Day-Wise</td>
              <td><a href="https://api.covid19india.org/states_daily.json" target="_blank">https://api.covid19india.org/states_daily.json</a></td>
              <td>Active</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>India Testing</td>
              <td><a href="https://api.covid19india.org/state_test_data.json" target="_blank">https://api.covid19india.org/state_test_data.json</a></td>
              <td>Active</td>
            </tr>
            <tr>
              <th scope="row">6</th>
              <td>India District-Wise Population</td>
              <td><a href="https://api.covid19india.org/misc.json" target="_blank">https://api.covid19india.org/misc.json</a></td>
              <td>Active</td>
            </tr>
          </tbody>
        </table>
      </div>                        
    </div>
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
  
</body>
</html>