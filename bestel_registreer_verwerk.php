<?php

if (isset($_POST["submit"])) {

   if (
      !empty($_POST["voornaam"])
      || !empty($_POST["achternaam"])
      && !empty($_POST["email"])
      && !empty($_POST["wachtwoord"])
      && !empty($_POST["geboortedatum"])

   ) {
      // als op registreer wordt gedrukt 
      if (isset($_POST['submit'])) {


         $voornaam = $_POST['voornaam'];
         $achternaam = $_POST['achternaam'];
         $email = trim($_POST["email"]);
         $wachtwoord = $_POST['wachtwoord'];
         $geboortedatum = $_POST['geboortedatum'];

         //database connectie

         require 'classes/database.php';
         $sql = "INSERT INTO orders (voornaam, achternaam, email, wachtwoord, geboortedatum) 
                VALUES ('$voornaam', '$achternaam', '$email', '$wachtwoord', '$geboortedatum')";

         // Voer de INSERT INTO STATEMENT uit
         if (mysqli_query((new Database())->getConnection(), $sql)) {
            header("location: bestel_overzicht.php");
         }
         mysqli_close($conn); // Sluit de database verbinding
      }
   }
}
