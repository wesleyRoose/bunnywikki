<link rel="stylesheet" href="../css/style.css">
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
                         <li class="navitem"><a class="actief" href="categorie.php" onmouseover="dropDown();">Categorieën<i class="fas fa-angle-down left"></i></a></li>
                         <!--Dropdown menu-->
                         <div class="dropdown" id="dropdown">
                             <li class="drop-item"><a href="kunst.php" class="drop-link">beeldjes</a></li>
                             <li class="drop-item"><a href="categorie.php" class="drop-link">Eten</a></li>
                             <li class="drop-item"><a href="categorie.php" class="drop-link">Kooien</a></li>
                         </div>
                         <li class="navitem"><a class="nav-item" href="over.php">Over</a></li>
                         <li class="navitem"><a class="nav-item" href="login.php">Login</a></li>  
                    </ul>
                </div>
            </nav>
            <!-- Responsive menu toggle button -->
            <div class="hamburger">
                <i class="fas fa-bars" id="hamburger" onclick="toggleMenu();"></i>
            </div>
        </div>
    </header>
</body>

<p>categorie</p>


<?php include "footer.php"; ?>