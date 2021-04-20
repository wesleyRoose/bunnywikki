<?php include "header/header.php"; ?>
<!doctype html>
<html lang="nl">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title> Login pagina </title>
    </head>
    <body>
        
    <h3> Login hieronder in</h3> 
    <form action="check.php" method="POST">
        <h4> Gebruikersnaam</h4>
        <input class="login_user"  name="username" placeholder="Gebruikersnaam" type="text" >  </input>
        <h4> Wachtwoord</h4>
        <input placeholder="Wachtwoord" name="password" type="password">  </input>
        <br>
        <br>
        <button> verzenden </button>
    </form>
    </body>
    </html>

<?php include "footer/footer.php"; ?>