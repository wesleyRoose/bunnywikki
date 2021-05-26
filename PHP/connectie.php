<?php
    session_start();


    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "bunnywiki";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

?>