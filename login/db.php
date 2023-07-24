<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname   = "dearmyhijab";

    $conn = mysqli_connect($hostname, $username, $password, $dbname);
   
    if(!$conn) {
        die("Error". mysqli_connect_error()); 
    } 
?>