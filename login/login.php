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

        


        <div class="Login">
            <form method="POST" action="login.php">
                <!-- Login met font awesome tekentjes ervoor -->
                <div class="fontawesometeken">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>Gebruikersnaam</h5>
                    <input type="text" name="gebruikersnaam" >
                </div>

                <div class="fontawesometeken"> 
                    <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                    <h5>Wachtwoord</h5>
                    <input type="password" name="wachtwoord">
                </div>
                <button type="submit" class="btn" name="login_user">Login</button>
                <a class="forgot" href="register.php">Registeer u nu!</a>
            </form>

    

<?php include "../footer/footer.php"; ?>