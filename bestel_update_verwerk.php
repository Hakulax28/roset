<?php

if (isset($_POST["submit"])) {

   $id = $_GET["id"];
   echo $id;
   if (
      !empty($_POST["voornaam"])
      && !empty($_POST["achternaam"])
      && !empty($_POST["email"])
      && !empty($_POST["wachtwoord"])
      && !empty($_POST["geboortedatum"])

   ) {

      //allemaal moeten ze true zijn
      $voornaam = $_POST['voornaam'];
      $achternaam = $_POST['achternaam'];
      $email = trim($_POST["email"]);
      $wachtwoord = $_POST['wachtwoord'];
      $geboortedatum = $_POST['geboortedatum'];

      //database connectie
      require 'classes/database.php';
      $sql = "UPDATE orders SET 
         voornaam = '$voornaam', 
         achternaam = '$achternaam', 
         email = '$email', 
         wachtwoord = '$wachtwoord',
         geboortedatum = '$geboortedatum',  WHERE id = '$id'  ";

      if (mysqli_query((new Database())->getConnection(), $sql)) {
         header("location: bestel_overzicht.php");
      }

      echo "Updated successfully";
      mysqli_close($conn); // Sluit de database verbinding
   }
}
