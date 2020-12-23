<!DOCTYPE html> <!-- ----------------- html start ----------------- -->
  <html>

    <head> <!-- ----------------- head section ----------------- -->
      <title>Information</title>
        <?php include 'links/links.php'; ?>
          <?php include 'css/styles.php'; ?>
    </head>

      <body onload="fetch()"> <!-- ----------------- body section ----------------- -->

        <nav class="navbar navbar-expand-lg navbar navbar-dark p-3"> <!-- ----------------- top navbar----------------- -->
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
                                  <a  class="dropdown-item dropstyle" href="prevention.php">Prevention</a>
                        </li>
                          <li class="nav-item">
                            <a class="nav-link" href="admin.php">Login</a>
                          </li>
                </ul>
              </div>
      </nav>
        <br> <!-- ----------------- line break ----------------- -->
          <br> <!-- ----------------- line break ----------------- -->

            <section class="corona_update container-fluid"> <!-- ----------------- head line ----------------- -->
              <div class="mb-3 ">
                <h1 class="text-center text-uppercase h1"> Information </h1>
              </div>
                <br> <!-- ----------------- line break ----------------- -->
                  <br> <!-- ----------------- line break ----------------- -->

                    <div class="container-fluid info"> <!-- ----------------- main content ----------------- -->
                      <br><!-- ----------------- line break ----------------- -->
                        <p class=" text-justify text-center ques">Are you official ?</p>
                          <p class=" text-justify text-center ans">No</p>
                            <br><!-- ----------------- line break ----------------- -->
                              <p class=" text-justify text-center ques "> What are your sources? How is the data gathered for this project? </p>
                                <p class=" text-justify text-center ans">We are using different APIs.</p>
                                  <br><!-- ----------------- line break ----------------- -->
                                    <p class=" text-justify text-center ques "> Why does Covid-19 Tracker have difference in numbers compared to MOHFW website? </p>
                                      <p class=" text-justify text-center ans">MoHFW updates the data at a scheduled time. However, we update them based on different APIs. These are generally more recent.</p>
                                        <br><!-- ----------------- line break ----------------- -->
                                          <p class=" text-justify text-center ques">Where can I find the data for this?</p>
                                            <p class=" text-justify text-center ans">All the data is available through different APIs <a href="apilist.php">(list of APIs Used)</a></p>
                                              <br><!-- ----------------- line break ----------------- -->
                                                <p class=" text-justify text-center ques">Who are you?</p>
                                                  <p class=" text-justify text-center ans"> I am <a href="https://prashal9499.github.io/" target="_blank">Prashal Tarkas</a> (creator of this website) a student who likes to work on different projects.</p>
                     </div>

                      <footer class="mt-5 footer"> <!-- ----------------- footer ----------------- -->
                        <div class="footer_style text-center container-fluid">
                          <p>© Covid-19 Tracker</p>
                        </div>
                      </footer>

        </body>

  </html>