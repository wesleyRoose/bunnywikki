<?php include "header.php";?>
<main class="backoffice-wrapper">
    <div class="backoffice">
        <h3>Producten kunnen hier worden toegevoegd</h3>
        <form action="data.php" method="post" name="product-form" id="product-form" autocomplete="off" class="pr">
            <label>Naam product:</label><br>
            <input type="text" name="product_naam" id="product_naam" class="input_products" required><br>
            <label>Categorie:</label><br>
            <input type="text" name="category" id="category" class="input_products"><br>
            <label>Timer:</label><br>
            <input type="time" name="timer_tijd" id="timer_tijd" class="input_products"><br>
            <label>Minimumbod:</label><br>
            <input type="number" name="minimum" id="minimum" class="input_products"><br>
            <label>Einddatum:</label><br>
            <input type="date" name="einddatum" id="einddatum" class="input_products"><br>
            <label>Foto:</label><br>
            <input type="file" name="foto" id="foto" class="input_products"><br>
            <label>Beschrijving</label><br>
            <textarea name="beschrijving" id="beschrijving" cols="30" rows="10" class="input_products" placeholder="Type hier"></textarea><br>
            <input type="submit" value="Verzenden" class="input_products">
        </form>
    </div>
</main>
<?php include "footer.php";?>