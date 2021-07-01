<?php include "connectie.php";?>
<?php include "header.php";?>
<main>
    <section class="overview">
        <div class="overview-holder">
            <h1>Overzicht van alle producten</h1>
            <?php 
                $result = mysqli_query($conn,"SELECT * FROM product ORDER BY ASC");
                while ($rij = mysqli_fetch_array($result)) {
                    echo '<div class="records"> ';
                    echo '<div>' . $rij["product_naam"] . '</div>';
                    echo '</div>';
                }
            ?>
        </div>
    </section>
</main>
<?php include "footer.php";?>