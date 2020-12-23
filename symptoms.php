<!DOCTYPE html> <!-- ----------------- html starts ----------------- -->
  <html>

    <head> <!-- ----------------- head section ----------------- -->
      <title>Symptoms</title>
        <?php include 'links/links.php'; ?>
          <?php include 'css/styles.php'; ?>   
    </head>

      <body onload="fetch()"> <!-- ----------------- body section ----------------- -->

        <nav class="navbar navbar-expand-lg navbar navbar-dark p-3"> <!-- ----------------- top nav bar ----------------- -->
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
                              <a class="dropdown-item dropstyle" href="covid19.php">About Covid-19</a>
                                <a class="dropdown-item dropstyle" href="prevention.php">Prevention</a>
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
                  <h1 class="text-center text-uppercase h1"> Symptoms </h1>
                </div>
                  <br> <!-- ----------------- line break ----------------- -->
                    <br> <!-- ----------------- line break ----------------- -->
                      <div class="container icon"> <!-- ----------------- content ----------------- -->
                        <div class="row">
                          <div class="col-lg-4 col-md-4 col-12 mt-5">
                            <figure class ="text-center">
                              <img src="images/cough.png" class="img-fluid" width="120" height="120"> <!-- ----------------- icon----------------- -->
                                <br> <!-- ----------------- line break ----------------- -->
                                  <br> <!-- ----------------- line break ----------------- -->
                                    <figcaption style="color: #BB86FC">Cough</figcaption> <!-- ----------------- text----------------- -->
                            </figure>
                          </div>
                            <div class="col-lg-4 col-md-4 col-12 mt-5">
                              <figure class ="text-center">
                                <img src="images/fever.png" class="img-fluid" width="120" height="120"> <!-- ----------------- icon----------------- -->
                                  <br> <!-- ----------------- line break ----------------- -->
                                    <br> <!-- ----------------- line break ----------------- -->
                                      <figcaption style="color: #BB86FC">Fever</figcaption> <!-- ----------------- text----------------- -->
                              </figure>
                            </div>
                              <div class="col-lg-4 col-md-4 col-12 mt-5">
                                <figure class ="text-center">
                                  <img src="images/sneezing.png" class="img-fluid" width="120" height="120"> <!-- ----------------- icon----------------- -->
                                    <br> <!-- ----------------- line break ----------------- -->
                                      <br> <!-- ----------------- line break ----------------- -->
                                        <figcaption style="color: #BB86FC">Sneezing</figcaption> <!-- ----------------- text----------------- -->
                                </figure>
                              </div>
                                <div class="col-lg-4 col-md-4 col-12 mt-5">
                                  <figure class ="text-center">
                                    <img src="images/difficulty-breathing.png" class="img-fluid" width="120" height="120"> <!-- ----------------- icon----------------- -->
                                      <br> <!-- ----------------- line break ----------------- -->
                                        <br> <!-- ----------------- line break ----------------- -->
                                          <figcaption style="color: #BB86FC">Difficulty Breathing</figcaption> <!-- ----------------- text----------------- -->
                                  </figure>
                                </div>
                                  <div class="col-lg-4 col-md-4 col-12 mt-5">
                                    <figure class ="text-center">
                                      <img src="images/tiredness.png" class="img-fluid" width="120" height="120"> <!-- ----------------- icon----------------- -->
                                        <br> <!-- ----------------- line break ----------------- -->
                                          <br> <!-- ----------------- line break ----------------- -->
                                            <figcaption style="color: #BB86FC">Tiredness</figcaption> <!-- ----------------- text----------------- -->
                                    </figure>
                                  </div>
                                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                                      <figure class ="text-center">
                                        <img src="images/diarrhea.png" class="img-fluid" width="120" height="120"> <!-- ----------------- icon----------------- -->
                                          <br> <!-- ----------------- line break ----------------- -->
                                            <br> <!-- ----------------- line break ----------------- -->
                                              <figcaption style="color: #BB86FC">Diarrhea</figcaption> <!-- ----------------- text----------------- -->
                                      </figure>
                                    </div>
                        </div>
                      </div>
                        <br> <!-- ----------------- line break ----------------- -->
                          <br> <!-- ----------------- line break ----------------- -->
                            <br> <!-- ----------------- line break ----------------- -->
                              
                              <div class="container-fluid"> 
                                <p class=" text-justify text-center para"> <!-- ----------------- information text ----------------- -->
                                  Symptoms of COVID-19 are variable, but usually include fever and a cough. People with the same infection may have different symptoms, and their symptoms may change over time. For example, one person may have a high fever, a cough, and fatigue, and another person may have a low fever at the start of the disease and develop difficulty breathing a week later. However, in people without prior ears, nose, and throat (ENT) disorders, loss of taste combined with loss of smell is associated with COVID-19 with a specificity of 95%.
                                </p>
                                  <p class=" text-justify text-center para">
                                    Some symptoms of COVID-19 can be relatively non-specific; the two most common symptoms are fever (88 percent) and dry cough (68 percent). Among those who develop symptoms, approximately one in five may become more seriously ill and have difficulty in breathing. Emergency symptoms include difficulty breathing, persistent chest pain or pressure, sudden confusion, difficulty waking, and bluish face or lips; immediate medical attention is advised if these symptoms are present. Further development of the disease can lead to complications including pneumonia, acute respiratory distress syndrome, sepsis, septic shock, and kidney failure.
                                  </p>
                                    <p class=" text-justify text-center para">
                                      As is common with infections, there is a delay, known as the incubation period, between the moment a person first becomes infected and the appearance of the first symptoms. The median incubation period for COVID-19 is four to five days. Most symptomatic people experience symptoms within two to seven days after exposure, and almost all symptomatic people will experience one or more symptoms before day twelve 
                                    </p>
                              </div>
                                <br> <!-- ----------------- line break ----------------- -->
                                  <br> <!-- ----------------- line break ----------------- -->

                                    <footer class="mt-5 footer"> <!-- ----------------- footer ----------------- -->
                                      <div class="footer_style text-center container-fluid">
                                        <p>© Covid-19 Tracker</p>
                                      </div>
                                    </footer> 

      </body>

  </html>