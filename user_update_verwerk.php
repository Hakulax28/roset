<?php

if (isset($_POST["submit"])) {

   $id = $_POST["id"];

   if (
      !empty($_POST["voornaam"])
      && !empty($_POST["achternaam"])
      && !empty($_POST["email"])
      && !empty($_POST["wachtwoord"])
      && !empty($_POST["geboortedatum"])
      && !empty($_POST["telefoon"])
      && !empty($_POST["adres"])
      && !empty($_POST["postcode"])
      && !empty($_POST["stad"])
      && !empty($_POST["rol"])

   ) {
      //allemaal moeten ze true zijn
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
      $sql = "UPDATE users SET 
         voornaam = '$voornaam', 
         achternaam = '$achternaam', 
         email = '$email', 
         wachtwoord = '$wachtwoord',
         geboortedatum = '$geboortedatum', 
         telefoon =  '$telefoon',
         adres = '$adres',
         postcode = '$postcode', 
         stad =  '$stad',
         rol = '$rol' WHERE id = '$id'  ";

      // Voer de INSERT INTO STATEMENT uit
      if (mysqli_query((new Database())->getConnection(), $sql)) {
         header("location: user_overzicht.php");
      }
      mysqli_close($conn); // Sluit de database verbinding

   }
}
