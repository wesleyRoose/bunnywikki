<?php include_once "header.php"; ?>
<aside>
  <div class= "checkbox" required>
  <input type="checkbox" id="categorie" name="categorie1" value="konijnen1">
    <label for="categorie1"> konijnen hok</label><br>
  <input type="checkbox" id="categorie" name="categorie2" value="konijnen2">
    <label for="categorie2"> konijnen voer</label><br>
  <input type="checkbox" id="categorie" name="categorie3" value="konijnen3">
    <label for="categorie3"> konijnen beeldjes</label><br>
  <input type="checkbox" id="categorie" name="categorie4" value="konijnen4">
    <label for="categorie4"> konijnenen</label><br>
  </div>
  <div class="bottom-link">
    <a href="overview.php" class="bottom-link-text">Overview Producten</a>
  </div>
</aside>

<!--grid menu-->
<div class="grid-container">
  <div class="grid-item">
  <img src="../images/konijn1.jpg" class= "grid-image">
  </div>
  <div class="grid-item">2</div>
  <div class="grid-item">3</div>  
  <div class="grid-item">4</div>
  <div class="grid-item">5</div>
  <div class="grid-item">6</div>  
  <div class="grid-item">7</div>
  <div class="grid-item">8</div>
  <div class="grid-item">9</div>  
</div>




<?php include "footer.php"; ?>