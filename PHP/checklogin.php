<?php
// maakt weer verbinding met database
include("connectie.php");
// zal zeggen dat we nog niet ingelogd zijn en zal dus dit gaan checken, ook kan je maar na 1 sec weer opnieuw inloggen.
$_SESSION["ingelogd"] = false;
sleep(1);
$msg = '';
// wanneer gebruikersnaam is ingevuld en de input mail (fop stukje) niet, voer dat eronder uit
if (isset($_POST["gebruikersnaam"]) == true and $_POST["email"] == '') {
    // kijken of het token overeenkomt, zo ja ga door
    if ($_POST["tk"] == $_SESSION["tk"]) {
        $gebruikersnaam = $_POST["gebruikersnaam"];
        $ww = $_POST["wachtwoord"];
        // maak het wachtwoord sterk door met salt te werken
        $ww = sha256($salt.$ww);
        // database stukje erin
        $sql = "select * from login where gebruikersnaam = '".$gebruikersnaam."' and wachtwoord = '".$ww."'";
        
        $result = mysqli_query($conn,$sql);
        // als de gevonden rij 1 gebruiker is dan heb je hem gevonden en voer je eronder uit
        if (mysqli_num_rows($result) == 1) {
            $rij = mysqli_fetch_array($result);
            // zo kan je de ingelogde admin zijn naam weergeven op het scherm
            $_SESSION["naam"] = $rij["naam"];
            $_SESSION["rechten"] = $rij["rechten"]; // 1 = user, 2 = admin
            $_SESSION["ingelogd"] = true;
            // zal gaan kijken of het een Admin is en stuurt hem dan door naar een andere pagina
            if ($_SESSION["rechten"] == 2) {
                // exit code want dan voert ie alles wat eronder staat niet meer uit en zo voorkom je verkeerde doorlinks
                header("location:index.php");
            } else {
                header("location:succes.php");
                exit();
            }
        } else {
            // fout

            $msg = 'Onbekende login';
            $_SESSION["tk"] = '';
            header("location:login.php?msg=".$msg);
            exit();
        }
    } else {
        // laat de hacker 1sec wachten en stopt meteen de code
        sleep(1);
        echo " niet gelukt3!";
        exit();
    }
    $_SESSION["tk"] = '';
} else {
    sleep(1);
    echo " niet gelukt5!";
    exit();
};
?>