<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" 
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <title>BunnyWiki</title>
</head>
<body>
    <header>
        <div class="header">
            <div class="logo">
                <a class="logo-link" href="index.php"><h2>BunnyWiki</h2></a>        
            </div>
            <nav class="menu" id="menu">
                <div class="menu-wrap">
                    <ul class="menu-list">
                         <li class="navitem"><a class="nav-item" href="index.php">Home</a></li>  
                         <li class="navitem"><a class="nav-item" href="#" onmouseover="dropDown();">Categorieën<i class="fas fa-angle-down left"></i></a></li>
                         <!--Dropdown menu-->
                         <div class="dropdown" id="dropdown">
                             <li class="drop-item"><a href="categorie.php" class="drop-link">Kunst</a></li>
                             <li class="drop-item"><a href="categorie.php" class="drop-link">Eten</a></li>
                             <li class="drop-item"><a href="categorie.php" class="drop-link">Kooien</a></li>
                         </div>
                         <li class="navitem"><a class="nav-item" href="over.php">Over</a></li> 
                         <li class="navitem"><a class="nav-item login" href="login.php">Login</a></li>  
                    </ul>
                </div>
            </nav>
            <!-- Responsive menu toggle button -->
            <div class="hamburger">
                <i class="fas fa-bars" id="hamburger" onclick="toggleMenu();"></i>
            </div>
        </div>
    </header>
    <!-- Begin code voor login -->
    <section class="Login">
        <form method="POST" action="login.php">
            <!-- gebruikersnaam met font awesome tekentje ervoor -->
            <div class="divgebruikersnaam">
                <i class="fas fa-user icoon"></i> <input  class="inputgebruikersnaam" type="text" placeholder="gebruikersnaam" name="gebruikersnaam">
            </div>
            <!-- wachtwoord met font awesome tekentje ervoor -->
            <div class="divwachtwoord">
                <i class="fas fa-lock icoon"></i> <input class="inputwachtwoord" type="password" placeholder="wachtwoord" name="wachtwoord">
            </div>
            <!-- button met registeren knop ernaast -->
            <button type="submit" class="buttonlogin" name="login_user">Login</button>
            <br>
            <a class="klikregistreer" href="registreren.php">Registeer u nu!</a>
        </form>
    </section>


<?php include "footer.php"; ?>