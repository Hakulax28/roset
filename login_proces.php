<?php

require 'classes/database.php';

session_start();

$_SESSION["temp_data"]["message"] = null;

if (empty($_POST["email"]) && empty($_POST["wachtwoord"])) {
    header("location: inloggen.php");
}

$email = $_POST["email"];
$password = $_POST["wachtwoord"];


$sql = "SELECT * FROM user WHERE email = '$email' ";

$result = mysqli_query((new Database())->getConnection(), $sql);

//var_dump(mysqli_num_rows($result));die;

if ($result) {
    $user = mysqli_fetch_assoc($result);

    if (is_null($user)) {
        //gebruiker onbekend
        header("location: inloggen.php");
        //var_dump($user);
        //die;
    } else {

        //hier kent het de gebruiker

        $_SESSION["email"] = $user["email"];
        $_SESSION["is_logged_in"] = true;
        $_SESSION["rol"] = $user["rol"];

        var_dump($_SESSION);
        //Hier bekijkt hij of degene die heeft ingelogd een gebruiker of personeel is.
        if ($_SESSION["rol"] == "personeel") {
            echo "U kan nu alles doen";
            header("location: gebruiker-overzicht.php");
        } else if ($_SESSION["rol"] == "gebruiker") {
            echo "U kan alleen een melding registreren";
            header("location: melding-overzicht.php");
        }
    }
}
