<?php


$email = $_POST["email"];
$password = $_POST["wachtwoord"];

require 'classes/database.php';

$sql = "SELECT * FROM users WHERE email = '$email' ";

$result = mysqli_query((new Database())->getConnection(), $sql);

if (!is_null($result)) {
    $user = mysqli_fetch_assoc($result); // 1 rij


    if ($user["wachtwoord"] == $_POST["wachtwoord"]) {
        //de gebruiker met email en wachtwoord zijn bekend. YEAAH!!

        session_start();

        $_SESSION["email"] = $user["email"];
        $_SESSION["is_logged_in"] = true;
        //$_SESSION["rol"] = $user["rol"];
        header("location: dashboard.php");
    }

    //if ($_SESSION["rol"] == "medewerker") {
    //echo "U kan nu alles doen";
    //header("location: dashboard.php");
    //} else if ($_SESSION["rol"] == "klant") {
    //echo "U kan alleen een melding registreren";
    //header("location: product-overzicht.php");
    //}
}
