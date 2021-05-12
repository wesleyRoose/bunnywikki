
<head>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/parts/over.css">
    <title>BunnyWiki - Over</title>
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
</body>

<section class="over">
    <div class="about">
        <h4>Over Ons</h4>
        <div class="about-text">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Etiam id velit maximus, bibendum ligula at, facilisis elit. 
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan tellus lorem, non pulvinar nunc vulputate in. 
                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                Duis elit arcu, accumsan gravida ligula nec, placerat porta leo. Vestibulum ultrices orci eu augue pellentesque malesuada. 
                Donec porta risus dictum, posuere arcu in, euismod eros. Ut sed magna mauris. Donec posuere mi eu enim sollicitudin lobortis. 
                Pellentesque eu nisi pellentesque, venenatis leo in, convallis ipsum. 
                Phasellus est augue, convallis sit amet maximus vitae, posuere ac ligula. Aenean lobortis dignissim dolor nec semper. 
                Vestibulum mauris nisl, facilisis at egestas at, accumsan id enim. Sed dictum elementum dolor at fermentum. 
                Proin pulvinar dignissim viverra. Etiam faucibus gravida consectetur.
                <br>
                <h4>Lorem Ipsum</h4>
                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                Duis elit arcu, accumsan gravida ligula nec, placerat porta leo. Vestibulum ultrices orci eu augue pellentesque malesuada. 
                Donec porta risus dictum, posuere arcu in, euismod eros. Ut sed magna mauris. Donec posuere mi eu enim sollicitudin lobortis. 
                Pellentesque eu nisi pellentesque, venenatis leo in, convallis ipsum. 
                Phasellus est augue, convallis sit amet maximus vitae, posuere ac ligula. Aenean lobortis dignissim dolor nec semper. 
                Vestibulum mauris nisl, facilisis at egestas at, accumsan id enim. Sed dictum elementum dolor at fermentum. 
                Proin pulvinar dignissim viverra. Etiam faucibus gravida consectetur.
            </p>
        </div>
    </div>
</section>


<?php include "footer.php"; ?>