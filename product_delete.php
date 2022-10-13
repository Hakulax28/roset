<?php

session_start();

print_r($_GET["id"]);

require 'classes/database.php';

$id = $_GET['id'];

$sql = "DELETE FROM product WHERE id = $id";

if (mysqli_query((new Database())->getConnection(), $sql)) {
   header("location: product_overzicht.php");
}
