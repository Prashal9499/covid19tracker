<!DOCTYPE html>
<html>

<!-- head section -->

<head>

    <title>About Covid-19</title>

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
          <a  class="dropdown-item dropstyle" href="symptoms.php">Symptoms</a>
          <a  class="dropdown-item dropstyle" href="prevention.php">Prevention</a>
      </li>
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
    <h1 class="text-center text-uppercase h1">about covid-19 </h1>
  </div>
<br> <!--line break -->
<br> <!--line break -->

<div class="container ">
     <figure class ="text-center ">
        <img src="images/coronavirus.png" class="img-fluid icon" width="200" height="200">
    </figure>
</div>

<div class="container-fluid">
<br>
<br>
<h4 class="heading text-center">What is Coronavirus ?</h4>
<br>
  <p class=" text-justify text-center para ">
  Coronavirus disease 2019 (COVID-19) is a contagious respiratory and vascular disease caused by severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2). First identified in Wuhan, China, it has caused an ongoing pandemic. COVID-19 mainly spreads through the air when people are near each other long enough, primarily via small droplets or aerosols, as an infected person breathes, coughs, sneezes, sings, or speaks. Transmission via fomites (contaminated surfaces) has not been conclusively demonstrated. It can spread as early as two days before infected persons show symptoms (presymptomatic), and from asymptomatic (no symptoms) individuals. People remain infectious for up to ten days in moderate cases, and two weeks in severe cases. 
  </p>
<br>
<br>
<h4 class="heading text-center">Background</h4> 
<br>
<p class=" text-justify text-center para ">
It is still unknown exactly where the outbreak first started, several early infected people had visited Huanan Seafood Wholesale Market, located in Wuhan, Hubei, China. On 11 February 2020, the World Health Organization (WHO) named the disease "COVID-19", which is short for coronavirus disease 2019. The virus that caused the outbreak is known as severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2), a newly discovered virus closely related to bat coronaviruses, pangolin coronaviruses, and SARS-CoV. The scientific consensus is that COVID-19 has a natural origin. The probable bat-to-human infection may have been among people processing bat carcasses and guano in the production of traditional Chinese medicines.

The earliest known person with symptoms was later discovered to have fallen ill on 1 December 2019, and that person did not have visible connections with the later wet market cluster. Of the early cluster of cases reported that month, two-thirds were found to have a link with the market. There are several theories about when and where the very first case (the so-called patient zero) originated. On 13 March 2020, an unverified report from the South China Morning Post (SCMP) suggested a case traced back to 17 November 2019 (a 55-year-old person from Hubei) may have been the first person infected. Phylogenic estimates in genetic studies conducted in early 2020 indicate that SARS-CoV-2 likely passed onto humans sometime between 6 October 2019 and 11 December 2019.
</p>
<br>
<br>

<h4 class="heading text-center">Cases</h4> 
<br>
<p class=" text-justify text-center para ">
Official case counts refer to the number of people who have been tested for COVID-19 and whose test has been confirmed positive according to official protocols. Many countries, early on, had official policies to not test those with only mild symptoms. An analysis of the early phase of the outbreak up to 23 January estimated 86 percent of COVID-19 infections had not been detected, and that these undocumented infections were the source for 79 percent of documented cases. Several other studies, using a variety of methods, have estimated that numbers of infections in many countries are likely to be considerably greater than the reported cases
</p>
<br>
<br>

</div>

<!-- footer -->

<footer class="mt-5 footer">
    <div class="footer_style text-center container-fluid">
        <p>© Covid-19 Tracker</p>
    </div>
</footer>

</body>
</html>