<?php 
include "connectie.php";

$id = "";
$product_naam = $_POST["product_naam"];
$categorie = $_POST["category"];
$tijd = $_POST["time"];
$minimumbod = $_POST["minimum"];
$einddatum = $_POST["einddatum"];
$foto = $_POST["foto"];
$beschrijving = $_POST["beschrijving"];

$query = "INSERT INTO product (";
$query .= "product_naam, category, time, minimum, einddatum, foto, beschrijving";
$query .= ") VALUES (";
$query .= "'{$product_naam}','{$categorie}', '{$tijd}', '{$minimum}', '{$einddatum}', '{$foto}', '{$beschrijving}'";
$query .= ")";

$result = mysqli_query($conn, $query);
$id = mysqli_insert_id($conn);

header('location: ../backoffice.php');
exit()

?>