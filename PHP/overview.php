<?php include "header.php";?>
<main>
    <section class="overview">
        <div class="overview-holder">
            <h1>Overzicht van alle producten</h1>
            <div class="products">
            <?php 
                $result = mysqli_query($conn,"SELECT * FROM product");
                while ($rij = mysqli_fetch_array($result)) {
                    echo '<div class="records"> ';
                    echo '<div class="overview-item">' . $rij["product_naam"] . '</div>';
                    echo '<div class="overview-item">' . $rij["beschrijving"] . '</div>';
                    echo '</div>';
                }
            ?>
            </div>
        </div>
    </section>
</main>
<?php include "footer.php";?>