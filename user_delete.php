<?php

session_start();

print_r($_GET["id"]);

require 'database.php';

$id = $_GET['id'];

$sql = "DELETE FROM besteling WHERE id = $id";

if (mysqli_query((new Database())->getConnection(), $sql)) {
    header("location: bestel-overzicht.php");
}
