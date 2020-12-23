<?php 
$username = "root";
$password = "";
$server = 'localhost';
$db = 'covid19';
$con = mysqli_connect($server,$username,$password,$db);
if($con){
    // echo "Connection Successful";
    ?>
    <script>
        alert('Database Connected');
    </script>
    <?php
}else{
    //echp "No connection";
    die("Database Connection Failed" . mysqli_connect_error());   
}
?>