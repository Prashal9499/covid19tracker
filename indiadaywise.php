<!DOCTYPE html> <!-- ----------------- html starts ----------------- -->
  <html>

    <head><!-- ----------------- head section ----------------- -->
      <title>India Day-Wise Updates</title>
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

            <section class="corona_update container-fluid"> <!-- ----------------- headline ----------------- -->
              <div class="mb-3 ">
                <h1 class="text-center text-uppercase h1"> covid-19 india day-wise updates</h1>
              </div>
                <br> <!-- ----------------- line break ----------------- -->
                  <br> <!-- ----------------- line break ----------------- -->

                    <div style="background-color: #121212" class="table-responsive card"> <!-- ----------------- main table ----------------- -->
                      <table class=" table table-dark table-borderless text-left table-hover" style="background-color: #121212;" id="tbl">

<?php // ----------------- php code for fetching API (India Day-Wise) ----------------- 

$data = file_get_contents('https://api.covid19india.org/data.json');
$daywise = json_decode($data, true);

$totalcount = count($daywise['cases_time_series']);

$i=0;
while ($i <  $totalcount){
    
?>

  <tr> <!-- ----------------- data table ----------------- -->
     <th class="text-left" colspan="6" style="color: #BB86FC; background-color: #1F1B24">Date and Month</th>
  </tr>
    <tr>
      <td colspan="6" class="text-left" ><?php echo $daywise['cases_time_series'][$i] ['date'] . "<br>" ; ?> </td>
    </tr>
      <tr class="text-capitalize" style="background-color: #1F1B24"> <!-- ----------------- table head ----------------- -->
        <th style="color: #BB86FC">daily confirmed</th>
          <th style="color: #BB86FC">daily deceased</th>
            <th style="color: #BB86FC">daily recovered</th>
              <th style="color: #BB86FC">total confirmed</th>
                <th style="color: #BB86FC">total deceased</th>
                  <th style="color: #BB86FC">total recovered</th>
      </tr>
        <tr class="mb-5">
          <td><?php echo $daywise['cases_time_series'][$i] ['dailyconfirmed'] . "<br>" ; ?></td> <!-- -----------------table row ----------------- -->
            <td><?php echo $daywise['cases_time_series'][$i] ['dailydeceased'] . "<br>" ; ?></td>
              <td><?php echo $daywise['cases_time_series'][$i] ['dailyrecovered'] . "<br>" ; ?></td>
                <td><?php echo $daywise['cases_time_series'][$i] ['totalconfirmed'] . "<br>" ; ?></td>
                  <td><?php echo $daywise['cases_time_series'][$i] ['totaldeceased'] . "<br>" ; ?></td>
                    <td><?php echo $daywise['cases_time_series'][$i] ['totalrecovered'] . "<br>" ; ?></td>
         </tr>

<?php // ----------------- php for increment in table data ----------------- 

$i++;
}

?>

    </table>
  </div>
</section>

  <div class="container scrolltop float-right pr-5"> <!-- ----------------- top scroller ----------------- -->
    <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"> </i>
  </div>

    <footer class="mt-5 footer"> <!-- ----------------- footer ----------------- -->
      <div class="footer_style text-center container-fluid">
        <p>© Covid-19 Tracker</p>
      </div>
    </footer>

<script type="text/javascript"> // ----------------- javascript for top scroller -----------------
mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};
function scrollFunction() {
if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
mybutton.style.display = "block";
} else {
mybutton.style.display = "none";
}
}

function topFunction(){
document.body.scrollTop = 0;
document.documentElement.scrollTop = 0;
}

</script>

      </body>

  </html>