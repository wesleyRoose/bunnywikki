<?php 
include "connectie.php";

$id = "";
$product_naam = $_POST["product_naam"];
$categorie = $_POST["category"];
$tijd = $_POST["time"];
$minimum = $_POST["minimum"];
$einddatum = $_POST["einddatum"];
$foto = "";
$beschrijving = $_POST["beschrijving"];

$query = "INSERT INTO product (";
$query .= "product_naam, category, time, minimum, einddatum, beschrijving";
$query .= ") VALUES (";
$query .= "'{$product_naam}','{$categorie}', '{$tijd}', '{$minimum}', '{$einddatum}', '{$beschrijving}'";
$query .= ")";

$result = mysqli_query($conn, $query);
$id = mysqli_insert_id($conn);

$afbeeldingnaam = './afbeeldingen/' . $id . '.jpg'; 
move_uploaded_file($_FILES['foto']['tmp_name'], $afbeeldingnaam);

header('location: succes.php');
exit()

?>