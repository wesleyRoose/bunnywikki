<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" 
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <title>BunnyWiki</title>
    <script type="text/javascript"> 
        const inputs = document.querySelectorAll(".input");

        function addcl(){
            let parent = this.parentNode.parentNode;
            parent.classList.add("focus");
        }

        function remcl(){
            let parent = this.parentNode.parentNode;
            if(this.value == ""){
                parent.classList.remove("focus");
            }
        }


        inputs.forEach(input => {
            input.addEventListener("focus", addcl);
            input.addEventListener("blur", remcl);
        });

    </script>
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

    <!-- Begin code voor registreren -->
    <div class="containerlogin">
        <div class="beginlogincontent" >
            <form method="post" action="registreercheck.php">
                <h2 class="title">Registreer u hier</h2>
                <br>
                <!-- Voornaam met icoon ernaast -->
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-address-book"></i>
                    </div>
                    <div class="div">
                        <h5 id="label1" >Voornaam*</h5>
                        <input onclick="none1()" type="text" class="input" name="voornaam" value="">
                    </div>
                </div>
                 <!-- Achternaam met icoon ernaast -->
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-address-book"></i>
                    </div>
                    <div class="div">
                        <h5 id="label2" >Achternaam</h5>
                        <input onclick="none2()" type="text" class="input" name="achternaam" value="">
                    </div>
                </div>
                 <!-- Geboortedatum met icoon ernaast -->
                 <div class="input-div pass">
                    <div class="i"> 
                        <i class="fas fa-birthday-cake"></i>
                    </div>
                    <div class="div">
                        <h5 id="label3"></h5>
                        <input onclick="none3()" type="date" class="input" name="geboortedatum" value="" >
                    </div>
                </div>
                <!-- Woonplaats met icoon ernaast -->
                <div class="input-div pass">
                    <div class="i"> 
                        <i class="fas fa-house-user"></i>
                    </div>
                    <div class="div">
                        <h5 id="label4">Woonplaats*</h5>
                        <input onclick="none4()" type="text" class="input" name="woonplaats" value="">
                    </div>
                </div>
                <!-- Postcode met icoon ernaast -->
                <div class="input-div pass">
                    <div class="i"> 
                        <i class="fas fa-house-user"></i>
                    </div>
                    <div class="div">
                        <h5 id="label5">Postcode*</h5>
                        <input onclick="none5()" type="text" class="input" name="postcode" value="">
                    </div>
                </div>
                <!-- Telefoon met icoon ernaast -->
                <div class="input-div pass">
                    <div class="i"> 
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="div">
                        <h5 id="label6">Telefoonnummer</h5>
                        <input onclick="none6()" type="number" class="input" name="telefoon" value="">
                    </div>
                </div>
                <!-- Email met icoon ernaast -->
                <div class="input-div pass">
                    <div class="i"> 
                        <i class="fas fa-at"></i>
                    </div>
                    <div class="div">
                        <h5 id="label7">E-Mail*</h5>
                        <input onclick="none7()" type="email" class="input" name="email" value="">
                    </div>
                </div>
                <!-- gebruikersnaam met icoon ernaast -->
                <div class="input-div pass">
                    <div class="i"> 
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5 id="label8" >Gebruikersnaam*</h5>
                        <input onclick="none8()" type="text" class="input" name="gebruikersnaam" >
                    </div>
                </div>
                <!-- Wachtwoord met icoon ernaast -->
                <div class="input-div pass">
                    <div class="i"> 
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5 id="label9" >Wachtwoord*</h5>
                        <input onclick="none9()" type="password" class="input" name="wachtwoord1" >
                    </div>
                </div>
                 <!-- Wachtwoord met icoon ernaast -->
                 <div class="input-div pass">
                    <div class="i"> 
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5 id="label10" >Herhaal wachtwoord*</h5>
                        <input onclick="none10()" type="password" class="input" name="wachtwoord2" >
                    </div>
                </div>
                <!-- Account en registreer knop/link -->
                <a class="vergeetenaanmeldknop">Velden met een * zijn verplicht!</a>
                <button type="submit" class="btn" name="registreerknop">Registreer</button>
                <a class="vergeetenaanmeldknop" href="login.php">Heeft u al een account?</a>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="../js/login.js"></script>

<?php include "footer.php"; ?>