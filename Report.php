<!DOCTYPE html> <!-- ----------------- html starts ----------------- -->
  <html>

    <head><!-- ----------------- head section ----------------- -->
      <title>Report a Case</title>
        <?php include 'links/links.php'; ?>
          <?php include 'css/styles.php'; ?>
    </head>

      <body onload="fetch()"> <!-- ----------------- body section ----------------- -->

        <nav class="navbar navbar-expand-lg navbar navbar-dark p-3"> <!-- ----------------- top navbar ----------------- -->
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
                                  <a  class="dropdown-item dropstyle" href="prevention.php">Prevention</a>
                        </li>
                          <li class="nav-item">
                            <a class="nav-link" href="info.php">Info</a>
                          </li>
                  </ul>
                </div>
        </nav>
          <br> <!-- ----------------- line break ----------------- -->
            <br> <!-- ----------------- line break ----------------- -->

              <section class="corona_update container-fluid"> <!-- ----------------- head line ----------------- -->
                <div class="mb-3 ">
                  <h1 class="text-center text-uppercase h1"> Report a Covid-19 Case </h1>
                    </div>
                      <br> <!-- ----------------- line break ----------------- -->
              </section>

                <div class="container"> <!-- ----------------- main report form ----------------- -->
                  <div class ="row">
                    <div class="col-lg-8 offset-lg-2 col-12">
                      <p class="heading text-center"><small>Data will be sent to Ministry of Health and Family Welfare, Government of India and nearest Covid Testing Center.</small></p> <!-- ----------------- information text----------------- -->
                        <br> <!-- ----------------- line break ----------------- -->
                          
                          <form action="" method="POST" class="icon"> <!-- ----------------- form ----------------- -->
                            <div class="form-group heading">
                              <label>Full Name</label>
                                <input type="text" class="form-control" name="fullname" placeholder="Full Name" autocomplete="off" required>
                            </div>
                              <div class="form-group heading">
                                <label for="exampleFormControlInput1">Email</label>
                                  <input type="email" class="form-control" name="email" placeholder="name@example.com" required>
                              </div>
                                <div class="form-group heading">
                                  <label>Contact No.</label>
                                    <input type="number" class="form-control" name="contactno" placeholder="+91XXXXXXXXXX" autocomplete="off" required >
                                </div>
                                  <div class="heading">
                                    <label>Symptoms</label>
                                      <br> <!-- ----------------- line break ----------------- -->
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
                                              <br> <!-- ----------------- line break ----------------- -->
                                                <div class="form-group heading">
                                                  <label for="exampleFormControlTextarea1">Other Information</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="info" placeholder="Additional Details" autocomplete="off" required></textarea>
                                                </div>
                                                  <button type="submit" class="btn btn-dark submit" name="submit">Submit</button>
                          </form>
                            <br> <!-- ----------------- line break ----------------- -->
                              <p class="heading text-center"><small>Once your data is sent a notification regarding your appointment for Covid-19 test will be sent the provided Email and Phone No.</small></p> <!-- ----------------- information text ----------------- -->
                      </div>
                    </div>
                  </div>

                    <footer class="mt-5 footer"> <!-- ----------------- footer ----------------- -->
                      <div class="footer_style text-center container-fluid">
                        <p>© Covid-19 Tracker</p>
                      </div>
                    </footer>

      </body>

  </html>

<?php // ----------------- php for database connection with the form -----------------

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