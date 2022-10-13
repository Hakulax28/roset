<?php

if (isset($_POST["submit"])) {

   if (
      !empty($_POST["user"])
      && !empty($_POST["product"])
      && !empty($_POST["oppak"])

   ) {
      // als op registreer wordt gedrukt 
      if (isset($_POST['submit'])) {

         $user = $_POST['user'];
         $product = $_POST['product'];
         $oppak = $_POST["oppak"];

         //database connectie

         require 'classes/database.php';
         $sql = "INSERT INTO orders (user_id, product_id, oppak) 
                VALUES ('$user', '$product', '$oppak')";

         // Voer de INSERT INTO STATEMENT uit
         if (mysqli_query((new Database())->getConnection(), $sql)) {
            header("location: bestel_overzicht.php");
         }
         mysqli_close($conn); // Sluit de database verbinding
      }
   }
}
