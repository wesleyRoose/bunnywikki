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
                         <li class="navitem"><a class="nav-item" href="#" onmouseover="dropDown();">Categorieën<i class="fas fa-angle-down left"></i></a></li>
                         <!--Dropdown menu-->
                         <div class="dropdown" id="dropdown">
                             <li class="drop-item"><a href="kunst.php" class="drop-link">beeldjes</a></li>
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

<!-- grid box -->
<div class="grid-container">
  <div class="item1">
  <img src="../images/beeldjes.jpg" class="grid_images">
      <h6>beeldje 1</h6>
      <br>
      <button class="button1">Click Me</button>
  </div>
  <div class="item3">
      <img src="../images/beeldjes.jpg" class="grid_images">
      <h6>Beeldje 2</h6>
      <br>
      <button class="button1" href="kunst.php" >Click Me</button>
  </div>  
  <div class="item4">
      <img src="../images/beeldjes.jpg" class="grid_images">
      <h6>Beeldje 2r</h6>
      <br>
      <button class="button1">Click Me</button>
</div>
<div class="item2">
  <img src="../images/beeldjes.jpg" class="grid_images">
      <h6>Beeldje 2</h6>
      <br>
      <button class="button1">Click Me</button>
  </div>
  <div class="item5">
      <img src="../images/beeldjes.jpg" class="grid_images">
      <h6>Beeldje 2</h6>
      <br>
      <button class="button1">Click Me</button>
  </div>  
  <div class="item6">
      <img src="../images/beeldjes.jpg" class="grid_images">
      <h6>Beeldje 2</h6>
      <br>
      <button class="button1">Click Me</button>
</div>

</div>


<?php include "footer.php"; ?>