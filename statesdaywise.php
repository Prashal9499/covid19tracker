<!DOCTYPE html>
<html>

<!-- head section -->

<head>

    <title>Indian States Day-Wise Updates</title>

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
<br> <!--line break -->
<br> <!--line break -->

<!-- page title-->

<section class="corona_update container-fluid">
   <div class="mb-3 ">
    <h1 class="text-center text-uppercase h1"> covid-19 indian states day-wise updates</h1>
  </div>
<br> <!--line break -->
<br> <!--line break -->

<!-- main table -->

<div style="background-color: #121212" class="table-responsive card">

   <table class=" table table-dark table-borderless text-left table-hover" style="background-color: #1F1B24" id="tbvalb">

   <tr>
      <th style="color: #BB86FC" onclick="sortTable(0)">Date</th>
      <th style="color: #BB86FC" onclick="sortTable(2)">Status</th>
      <th style="color: #BB86FC">AN</th>
      <th style="color: #BB86FC">AP</th>
      <th style="color: #BB86FC">AR</th>
      <th style="color: #BB86FC">AS</th>
      <th style="color: #BB86FC">BR</th>
      <th style="color: #BB86FC">CH</th>
      <th style="color: #BB86FC">CT</th>
      <th style="color: #BB86FC">DD</th>
      <th style="color: #BB86FC">DL</th>
      <th style="color: #BB86FC">DN</th>
      <th style="color: #BB86FC">GA</th>
      <th style="color: #BB86FC">GJ</th>
      <th style="color: #BB86FC">HP</th>
      <th style="color: #BB86FC">HR</th>
      <th style="color: #BB86FC">JH</th>
      <th style="color: #BB86FC">JK</th>
      <th style="color: #BB86FC">KA</th>
      <th style="color: #BB86FC">KL</th>
      <th style="color: #BB86FC">LA</th>
      <th style="color: #BB86FC">LD</th>
      <th style="color: #BB86FC">MH</th>
      <th style="color: #BB86FC">ML</th>
      <th style="color: #BB86FC">MN</th>
      <th style="color: #BB86FC">MP</th>
      <th style="color: #BB86FC">MZ</th>
      <th style="color: #BB86FC">NL</th>
      <th style="color: #BB86FC">OR</th>
      <th style="color: #BB86FC">PB</th>
      <th style="color: #BB86FC">PY</th>
      <th style="color: #BB86FC">RJ</th>
      <th style="color: #BB86FC">SK</th>
      <th style="color: #BB86FC">TG</th>
      <th style="color: #BB86FC">TN</th>
      <th style="color: #BB86FC">TR</th>
      <th style="color: #BB86FC">TT</th>
      <th style="color: #BB86FC">UN</th>
      <th style="color: #BB86FC">UP</th>
      <th style="color: #BB86FC">UT</th>
      <th style="color: #BB86FC">WB</th>
    </tr>   

    <?php

$data = file_get_contents('https://api.covid19india.org/states_daily.json');
$statedaywise = json_decode($data, true);

$statescount = count($statedaywise['states_daily']);

$i=1;
while($i < $statescount){

    ?>

<tr>
   <td><?php echo $statedaywise['states_daily'][$i]['date'] ?></td>
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

<footer class="mt-5 footer">
    <div class="footer_style text-center container-fluid">
        <p>© Covid-19 Tracker</p>
    </div>
</footer>

<!-- top scroller javascript -->

</script>

<script type="text/javascript">
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

<!-- table sorting javascript -->

<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("tbvalb");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc"; 
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;      
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>

</body>
</html>