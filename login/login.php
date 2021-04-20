<?php include "header/header.php"; ?>

        
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
    

<?php include "footer/footer.php"; ?>