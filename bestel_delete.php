<?php

session_start();

print_r($_GET["ID"]);

require 'classes/database.php';

$id = $_GET['ID'];

$sql = "DELETE FROM orders WHERE ID = $id";

if (mysqli_query((new Database())->getConnection(), $sql)) {
   header("location: bestel_overzicht.php");
}
