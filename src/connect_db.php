<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_con_landingpage";

    $con = mysqli_connect($servername,$username,$password,$dbname);

    if (!$con) {
        die("connection_failed" . mysqli_connect_error());
    }
    
?>