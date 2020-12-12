<!DOCTYPE html>
<html>

<!-- head section -->

<head>

    <title>APIs Used</title>

    <?php include 'links/links.php'; ?>
    <?php include 'css/styles.php'; ?>
    
</head>

<!-- page body -->

<body>

<!-- top navbar -->

<nav class="navbar navbar-expand-lg navbar navbar-dark p-3">

<a class="navbar-brand" href="index.php">
<img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="Covid-19 Tracker">
Covid-19 Tracker
</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  
  </div>
</nav>
<br> <!--line break -->
<br> <!--line break -->
<!-- page title-->

<section class="corona_update container-fluid">
   <div class="mb-3 ">
    <h1 class="text-center h1"> APIs USED </h1>
  </div>
<br> <!--line break -->
<br> <!--line break -->

<div class="main-div">
<div class="center-div">
<div style="background-color: #121212" class="table-responsive card">

<table class="table table-dark table-borderless text-left table-hover" style="background-color: #1F1B24" id="tbvalb">
<thead>
   <tr>
      <th scope="col" style="color: #BB86FC">S No.</th>
      <th scope="col" style="color: #BB86FC">Data APIs</th>
      <th scope="col" style="color: #BB86FC">URL</th>
      <th scope="col" style="color: #BB86FC">Status</th>
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
<br>
<br>
<!-- footer -->

<footer class="mt-5 footer">
    <div class="footer_style text-center container-fluid">
        <p>© Covid-19 Tracker</p>
    </div>
</footer>

</body>

</html>