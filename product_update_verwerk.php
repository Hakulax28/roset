<?php

if (isset($_POST["submit"])) {

   $id = $_GET["id"];
   echo $id;
   if (
      !empty($_POST["naam"])
      && !empty($_POST["prijs_per_kg"])
      && !empty($_POST["smaak_van_de_week"])
      && !empty($_POST["categorie"])

   ) {

      //allemaal moeten ze true zijn

      $naam = $_POST['naam'];
      $prijs_per_kg = $_POST['prijs_per_kg'];
      $smaak_van_de_week = $_POST['smaak_van_de_week'];
      $categorie = $_POST['categorie'];

      //database connectie
      require 'classes/database.php';
      $sql = "UPDATE product SET 
         naam = '$naam', 
         prijs_per_kg = '$prijs_per_kgm', 
         smaak_van_de_week = '$smaak_van_de_week', 
         categorie = '$categorie' WHERE id = '$id'  ";

      if (mysqli_query((new Database())->getConnection(), $sql)) {
         header("location: product_overzicht.php");
      }

      echo "Updated successfully";
      mysqli_close($conn); // Sluit de database verbinding
   }
}
