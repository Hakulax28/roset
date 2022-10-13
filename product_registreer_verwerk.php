<?php

if (isset($_POST["submit"])) {

   if (
      !empty($_POST["naam"])
      && !empty($_POST["prijs_per_kg"])
      && !empty($_POST["smaak_van_de_week"])
      && !empty($_POST["categorie"])

   ) {
      // als op registreer wordt gedrukt 
      if (isset($_POST['submit'])) {

         $naam = $_POST['naam'];
         $prijs_per_kg = $_POST['prijs_per_kg'];
         $smaak_van_de_week = $_POST['smaak_van_de_week'];
         $categorie = $_POST['categorie'];

         //database connectie

         require 'classes/database.php';
         $sql = "INSERT INTO product (naam, prijs_per_kg, smaak_van_de_week, categorie)
                VALUES ('$naam', '$prijs_per_kg', '$smaak_van_de_week', '$categorie')";

         // Voer de INSERT INTO STATEMENT uit
         if (mysqli_query((new Database())->getConnection(), $sql)) {
            header("location: product_overzicht.php");
         }
         mysqli_close($conn); // Sluit de database verbinding
      }
   }
}
