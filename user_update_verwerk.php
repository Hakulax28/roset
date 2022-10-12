<?php

if (isset($_POST["submit"])) {

    $id = $_POST["id"];

    if (
        !empty($_POST["voornaam"])
        && !empty($_POST["achternaam"])
        && !empty($_POST["email"])
        && !empty($_POST["wachtwoord"])
        && !empty($_POST["geboortedatum"])
        && !empty($_POST["telefoonnummer"])
        && !empty($_POST["rol"])

    ) {
        //allemaal moeten ze true zijn
        $voornaam = $_POST["voornaam"];
        $achternaam = $_POST["achternaam"];
        $email = trim($_POST["email"]);
        $wachtwoord = $_POST["wachtwoord"];
        $geboortedatum = $_POST["geboortedatum"];
        $telefoonnummer = $_POST["telefoonnummer"];
        $rol = $_POST["rol"];

        //database connectie

        require 'database.php';

        $sql = "UPDATE users SET 
        voornaam = '$voornaam', 
        achternaam = '$achternaam', 
        email = '$email', 
        wachtwoord = '$wachtwoord',
        geboortedatum = '$geboortedatum', 
        telefoonnummer =  '$telefoonnummer',
        rol = '$rol' WHERE id = '$id'  ";

            // Voer de INSERT INTO STATEMENT uit
        ;

        if (mysqli_query($conn, $sql)) {
            header("location: gebruiker-overzicht.php");
        }

        echo "Updated successfully";
        mysqli_close($conn); // Sluit de database verbinding

    }
}
