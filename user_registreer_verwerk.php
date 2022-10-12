<?php

if (isset($_POST["submit"])) {

   if (
      !empty($_POST["voornaam"])
      || !empty($_POST["achternaam"])
      && !empty($_POST["email"])
      && !empty($_POST["wachtwoord"])
      && !empty($_POST["geboortedatum"])
      && !empty($_POST["telefoon"])
      && !empty($_POST["adres"])
      && !empty($_POST["postcode"])
      && !empty($_POST["stad"])
      && !empty($_POST["rol"])

   ) {
      // als op registreer wordt gedrukt 
      echo '1';
      if (isset($_POST['submit'])) {
         $voornaam = $_POST['voornaam'];
         $achternaam = $_POST['achternaam'];
         $email = trim($_POST["email"]);
         $wachtwoord = $_POST['wachtwoord'];
         $geboortedatum = $_POST['geboortedatum'];
         $telefoon = $_POST['telefoon'];
         $adres = $_POST['adres'];
         $postcode = $_POST['postcode'];
         $stad = $_POST['stad'];
         $rol = $_POST['rol'];

         //database connectie

         require 'classes/database.php';
         $sql = "INSERT INTO user (voornaam, achternaam, email, wachtwoord, geboortedatum, telefoon, adres, postcode, stad, rol)
                VALUES ('$voornaam', '$achternaam', '$email', '$wachtwoord', '$geboortedatum', '$telefoon', '$adres', '$postcode','$stad', '$rol')";

         // Voer de INSERT INTO STATEMENT uit
         if (mysqli_query((new Database())->getConnection(), $sql)) {
            echo '1';
            die;
            header("location: user_overzicht.php");
         }

         mysqli_close($conn); // Sluit de database verbinding
      }
   }
}
