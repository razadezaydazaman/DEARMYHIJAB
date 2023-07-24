<?php

$conn = "";

try{
    $servername = "localhost";
    $dbname = "dearmyhijab";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$servername; dbname=dearmyhijab", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e) {

    echo "Connection Failed: " . $e->getMessage();

}

?>