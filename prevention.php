<!DOCTYPE html>
<html>

<!-- head section -->

<head>

    <title>Prevention</title>

    <?php include 'links/links.php'; ?>
    <?php include 'css/styles.php'; ?>
    
</head>

<!-- page body -->

<body onload="fetch()">

<!-- top navbar -->

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
      </li> 
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Covid-19
        </a>
        <div class="dropdown-menu dropstyle" aria-labelledby="navbarDropdown">
          <a  class="dropdown-item dropstyle" href="covid19.php">About Covid-19</a>
          <a  class="dropdown-item dropstyle" href="symptoms.php">Symptoms</a>
      </li>

      <li class="nav-item">
      <a class="nav-link" href="info.php">Info</a>
      </li>
    </ul>
  </div>
</nav>
<br> <!--line break -->
<br> <!--line break -->
<!-- page title-->

<section class="corona_update container-fluid">
   <div class="mb-3 ">
    <h1 class="text-center text-uppercase h1"> Prevention </h1>
  </div>
<br> <!--line break -->
<br> <!--line break -->

<div class="container icon">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-12 mt-5">
              <div class ="row">
                  <div class="col-lg-4 col-md-4 col-12">
                  <figure class ="text-center">
              <img src="images/hand-sanitizer.png" class="img-fluid" width="90" height="90">
              </figure>
              </div>

              <div class="col-lg-8 col-md-8 col-12">
                  <p style="color: #BB86FC">Wash your hands regularly for 20 seconds, with soap and water or alcohol-based hand sanitizer.</P>
              </div>
          </div>
       </div>

       <div class="col-lg-4 col-md-4 col-12 mt-5">
              <div class ="row">
                  <div class="col-lg-4 col-md-4 col-12">
                  <figure class ="text-center">
              <img src="images/mask.png" class="img-fluid" width="90" height="90">
              </figure>
              </div>

              <div class="col-lg-8 col-md-8 col-12">
                  <p style="color: #BB86FC">Always wear a mask when in contact with other person.</P>
              </div>
          </div>
       </div>

       <div class="col-lg-4 col-md-4 col-12 mt-5">
              <div class ="row">
                  <div class="col-lg-4 col-md-4 col-12">
                  <figure class ="text-center">
              <img src="images/social-distancing.png" class="img-fluid" width="90" height="90">
              </figure>
              </div>

              <div class="col-lg-8 col-md-8 col-12">
                  <p style="color: #BB86FC">Avoid Contact and maintain Social Distancing (at least 6 feet) with others.</P>
              </div>
          </div>
       </div>

       <div class="col-lg-4 col-md-4 col-12 mt-5">
              <div class ="row">
                  <div class="col-lg-4 col-md-4 col-12">
                  <figure class ="text-center">
              <img src="images/quarantine.png" class="img-fluid" width="90" height="90">
              </figure>
              </div>

              <div class="col-lg-8 col-md-8 col-12">
                  <p style="color: #BB86FC">Stay at home and self-isolate from others if you feel unwell.</P>
              </div>
          </div>
       </div>

       <div class="col-lg-4 col-md-4 col-12 mt-5">
              <div class ="row">
                  <div class="col-lg-4 col-md-4 col-12">
                  <figure class ="text-center">
              <img src="images/news.png" class="img-fluid" width="90" height="90">
              </figure>
              </div>

              <div class="col-lg-8 col-md-8 col-12">
                  <p style="color: #BB86FC">Stay Informed by watching NEWS and follow the guidelines.</P>
              </div>
          </div>
       </div>

       <div class="col-lg-4 col-md-4 col-12 mt-5">
              <div class ="row">
                  <div class="col-lg-4 col-md-4 col-12">
                  <figure class ="text-center">
              <img src="images/infected.png" class="img-fluid" width="90" height="90">
              </figure>
              </div>

              <div class="col-lg-8 col-md-8 col-12">
                  <p style="color: #BB86FC">If you feel any symptom seek medical treatment early.</P>
              </div>
          </div>
       </div>

    </div>
</div>
</section>
<br> <!--line break -->
<br> <!--line break -->

<div class="container-fluid">

<p class=" text-justify text-center para ">
Strategies for preventing transmission of the disease include social distancing, wearing of masks, washing hands, avoiding touching the eyes, nose, or mouth with unwashed hands, and coughing or sneezing into a tissue, and putting the tissue directly into a waste container.
</p>

</div>
      



<!-- footer -->

<footer class="mt-5 footer">

<div class="footer_style text-center container-fluid">
        <p>© Covid-19 Tracker</p>
    </div>

</footer>

</body>
</html>

<?php

include 'covidcaseform.php';

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