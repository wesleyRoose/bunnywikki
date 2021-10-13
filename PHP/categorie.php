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
<section class="overview">
        <div class="overview-holder">
            <h1>Overzicht van alle producten</h1>
            <div class="products">
            <?php 
                $result = mysqli_query($conn,"SELECT * FROM product");
                while ($rij = mysqli_fetch_array($result)) {
                    echo '<div class="records"> ';
                    echo '<div class="overview-item">' . $rij["product_naam"] . '</div>';
                    echo '<div class="overview-item">' . $rij["category"] . '</div>';
                    echo '<div class="overview-item">' . $rij["time"] . '</div>';
                    echo '<div class="overview-item">' . $rij["minimum"] . '</div>';
                    echo '<div class="overview-item">' . $rij["einddatum"] . '</div>';
                    echo '<div class="overview-item">' . $rij["foto"] . '</div>';
                    echo '<div class="overview-item">' . $rij["beschrijving"] . '</div>';
                    echo '</div>';
                }
            ?>
            </div>
        </div>
    </section>




<?php include "footer.php"; ?>