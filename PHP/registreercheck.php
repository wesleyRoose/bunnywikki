<?php
    include "connectie.php";

    // Variabelen voor makkelijkere code
    $voornaam = "";
    $achternaam = "";
    $geboortedatum = "";
    $woonplaats = "";
    $postcode = "";
    $telefoon = "";
    $email = "";
    $gebruikersnaam = "";
    $wachtwoord1 = "";
    $wachtwoord2 = "";
    $errors = array();
    

    if (isset($_POST["registreerknop"])) {

        // Krijgt hieronder alle ingevulde variabelen
        $voornaam = cleaninput($_POST["voornaam"],20);
        $achternaam = cleaninput($_POST["achternaam"],25);
        $geboortedatum = omdraaiendatum($_POST["geboortedatum"]);
        $woonplaats = cleaninput($_POST["woonplaats"],80);
        $postcode = cleaninput($_POST["postcode"],20);
        $telefoon = mysqli_real_escape_string($conn, $_POST['telefoon']);
        $email = cleaninput($_POST["email"],30);
        $gebruikersnaam = cleaninput($_POST["gebruikersnaam"],30);
        $wachtwoord1 = cleaninput($_POST["wachtwoord1"],80);
        $wachtwoord2 = cleaninput($_POST["wachtwoord2"],80);

        // Alle verplichte velden worden hieronder gecheckt of het ingevuld is.
        if (empty($voornaam)) { array_push($errors, "Voornaam is een verplicht veld!", header ('location: registreren.php')); }
        if (empty($geboortedatum)) { array_push($errors, header ('location: registreren.php'));}
        if (empty($woonplaats)) { array_push($errors, header ('location: registreren.php')); }
        if (empty($postcode)) { array_push($errors, header ('location: registreren.php')); }
        if (empty($email)) { array_push($errors, header ('location: registreren.php')); }
        if (empty($gebruikersnaam)) { array_push($errors, header ('location: registreren.php')); }
        if ($wachtwoord1 != $wachtwoord2) { array_push($errors, header ('location: registreren.php'));}

        // verbinding met database zodat hij alles onder het kopje gebruikers stopt
        if (count($errors) == 0) {
            $wachtwoord1 = sha1($salt.$wachtwoord1);
            $query = "INSERT INTO gebruikers (voornaam, achternaam, geboortedatum, woonplaats, postcode, telefoon, email, gebruikersnaam, wachtwoord) 
                      VALUES('$voornaam', '$achternaam', '$geboortedatum', '$woonplaats', '$postcode', '$telefoon', '$email', '$gebruikersnaam', '$wachtwoord1')";
            mysqli_query($conn, $query);
            $_SESSION['voornaam'] = $voornaam;
            $_SESSION['succes'] = "Je bent nu ingelogd!";
            header('location: login.php');
        }
    }
?>