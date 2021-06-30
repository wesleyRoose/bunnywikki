 
    
    
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
                         <li class="navitem"><a class="actief"  href="login.php">Login</a></li>  
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
    <div class="containerlogin">
        <div class="beginlogincontent" >
            <!-- titel met PHP verstuur methode -->
            <form method="post" action="checklogin.php">
                <h2 class="title">Welkom</h2>
                <br>
                <!-- gebruikersnaam met icoon ernaast -->
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5 id="label1">Gebruikersnaam</h5>
                        <input onclick="none1()" type="text" name="gebruikersnaam">
                        
                    </div>
                </div>
                <!-- wachtwoord met icoon ernaast -->
                <div class="input-div pass">
                    <div class="i"> 
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5 id="label2">Wachtwoord</h5>
                        <input onclick="none2()"  type="password" name="wachtwoord">
                    </div>
                </div>
                <!-- fop stukje -->
                <input type="hidden" placeholder="email" name="email" class="mail"> <br>
                <!-- begin button met PHP link voor verzenden -->
                <button type="submit" class="btn" name="inlogbutton">Login</button>
                    <input type="hidden" name="tk" value="<?php echo $token; ?>">
                <a class="vergeetenaanmeldknop" href="registreren.php">Registeer u nu!</a>
            </form>
            <?php 
            if (isset($_GET["msg"])) {
                echo '<p>'.$_GET["msg"].'</p>';
            }
            ?>
        </div>
    </div>
    <script type="text/javascript" src="../js/login.js"></script>

<br> <br> <br>
<?php include "footer.php"; ?>