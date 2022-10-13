<?php

if (isset($_POST["submit"])) {

   $id = $_GET["id"];
   if (
      !empty($_POST["bezorg"])
      && !empty($_POST["ontvang"])

   ) {

      //allemaal moeten ze true zijn

      $bezorg = $_POST['bezorg'];
      $ontvang = $_POST['ontvang'];

      //database connectie
      require 'classes/database.php';
      $sql = "UPDATE orders SET bezorg = '$bezorg', ontvang = '$ontvang' WHERE id = '$id'  ";

      if (mysqli_query((new Database())->getConnection(), $sql)) {
         header("location: bestel_overzicht.php");
      }

      echo "Updated successfully";
      mysqli_close($conn); // Sluit de database verbinding
   }
}
