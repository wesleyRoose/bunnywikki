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
        $voornaam = mysqli_real_escape_string($conn, $_POST['voornaam']);
        $achternaam = mysqli_real_escape_string($conn, $_POST['achternaam']);
        $geboortedatum = mysqli_real_escape_string($conn, $_POST['geboortedatum']);
        $woonplaats = mysqli_real_escape_string($conn, $_POST['woonplaats']);
        $postcode = mysqli_real_escape_string($conn, $_POST['postcode']);
        $telefoon = mysqli_real_escape_string($conn, $_POST['telefoon']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $gebruikersnaam = mysqli_real_escape_string($conn, $_POST['gebruikersnaam']);
        $wachtwoord1 = mysqli_real_escape_string($conn, $_POST['wachtwoord1']);
        $wachtwoord2 = mysqli_real_escape_string($conn, $_POST['wachtwoord2']);

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
            $gebruikersnaam = sha1($salt.$gebruikersnaam);
            $query = "INSERT INTO gebruikers (voornaam, achternaam, geboortedatum, woonplaats, postcode, telefoon, email, gebruikersnaam, wachtwoord) 
                      VALUES('$voornaam', '$achternaam', '$geboortedatum', '$woonplaats', '$postcode', '$telefoon', '$email', '$gebruikersnaam', '$wachtwoord1')";
            mysqli_query($conn, $query);
            $_SESSION['voornaam'] = $voornaam;
            $_SESSION['succes'] = "Je bent nu ingelogd!";
            header('location: index.php');
        }
    }




?>