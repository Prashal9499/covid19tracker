<!DOCTYPE html>
<html>

<!-- head section -->

<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>World Live Updates</title>

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
<br> <!--line break -->
<br> <!--line break -->
<!-- page title-->

<section class="corona_update container-fluid">
   <div class="mb-3 ">
    <h1 class="text-center text-uppercase h1"> covid-19 world live updates</h1>
  </div>
<br> <!--line break -->
<br> <!--line break -->

<!-- main table -->

  <div style="background-color: #121212" class="table-responsive card">

   <table class=" table table-dark table-borderless text-left table-hover" style="background-color: #1F1B24" id="tbvalb">
      <tr>
         <th style="color: #BB86FC" onclick="sortTable(0)">Country</th>
         <th style="color: #BB86FC" onclick="sortTable(1)">Total Confirmed</th>
         <th style="color: #BB86FC" onclick="sortTable(2)">Total Recovered</th>
         <th style="color: #BB86FC" onclick="sortTable(3)">Total Deaths</th>
         <th style="color: #BB86FC" onclick="sortTable(4)">New Confirmed</th>
         <th style="color: #BB86FC" onclick="sortTable(5)">New Recovered</th>
         <th style="color: #BB86FC" onclick="sortTable(6)">New Deaths</th>
       </tr> 
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

<!-- api javascript -->

<script>

//api data fatched all countries

function fetch(){
     $.get("https://api.covid19api.com/summary",
     
         function (data){
             // console.log(data['Countries'].length);
             var tbvalb = document.getElementById('tbvalb')

             for(var i=1; i<(data['Countries'].length); i++){
               var x = tbvalb.insertRow();
               x.insertCell(0);

               tbvalb.rows[i].cells[0].innerHTML = data ['Countries'][i-1]['Country'];
               
              
               x.insertCell(1);

               tbvalb.rows[i].cells[1].innerHTML = data ['Countries'][i-1]['TotalConfirmed'];
               

               x.insertCell(2);

               tbvalb.rows[i].cells[2].innerHTML = data ['Countries'][i-1]['TotalRecovered'];
               

               x.insertCell(3);

               tbvalb.rows[i].cells[3].innerHTML = data ['Countries'][i-1]['TotalDeaths'];
               

               x.insertCell(4);

               tbvalb.rows[i].cells[4].innerHTML = data ['Countries'][i-1]['NewConfirmed'];
          

               x.insertCell(5);

               tbvalb.rows[i].cells[5].innerHTML = data ['Countries'][i-1]['NewRecovered'];
               


               x.insertCell(6);

               tbvalb.rows[i].cells[6].innerHTML = data ['Countries'][i-1]['NewDeaths'];
               
             }
         }     
     );
}

</script>

<!-- top scroller javascript -->

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