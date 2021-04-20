<?php include "../header/header.php"; ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" 
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <title>BunnyWiki</title>
</head>

        
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
    

<?php include "../footer/footer.php"; ?>