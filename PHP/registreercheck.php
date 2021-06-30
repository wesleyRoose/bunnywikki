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

    // Connectie van de database als var
    $conn = mysqli_connect ('localhost', 'root', '', 'bunnywiki');

    if (isset($_POST["registreerknop"])) {

        // Krijgt hieronder alle ingevulde variabelen
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
        if (empty($voornaam)) { array_push($errors, "voornaam is verplicht"); }
        if (empty($geboortedatum)) { array_push($errors, "Geboortedatum is verplicht"); }
        if (empty($woonplaats)) { array_push($errors, "Woonplaats is verplicht"); }
        if (empty($postcode)) { array_push($errors, "Postcode is verplicht"); }
        if (empty($email)) { array_push($errors, "Email is verplicht"); }
        if (empty($gebruikersnaam)) { array_push($errors, "gebruikersnaam is verplicht"); }
        if ($wachtwoord1 != $wachtwoord2) {array_push($errors, "De wachtwoorden komen niet overeen");}

        // verbinding met database zodat hij alles onder het kopje gebruikers stopt
        if (count($errors) == 0) {
            $query = "INSERT INTO gebruikers (voornaam, achternaam, geboortedatum, woonplaats, postcode, telefoon, email, gebruikersnaam, wachtwoord) 
                      VALUES('$voornaam', '$achternaam', '$geboortedatum', '$woonplaats', '$postcode', '$telefoon', '$email', '$gebruikersnaam', '$wachtwoord')";
            mysqli_query($conn, $query);
            $_SESSION['voornaam'] = $voornaam;
            $_SESSION['succes'] = "Je bent nu ingelogd!";
            header('location: index.php');
        }
    }




?>