<?php
    session_start();


    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "bunnywiki";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    $salt = "#fE15@q!";

    function cleaninput($tekst, $lengte) {
        $tekst = substr($tekst,0,$lengte);
        global $conn;
        $tekst = mysqli_real_escape_string($conn,$tekst);
        return $tekst;
    }

    function omdraaiendatum($datum) {
        $temp = explode("-", $datum);
        $new = $temp [2]."-".$temp [1]."-". $temp[0];
        return $new;
    }

    function cleanoutput($tekst) {
        return htmlentities($tekst);
    }

?>