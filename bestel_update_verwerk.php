<?php

if (isset($_POST["submit"])) {

   $id = $_GET["ID"];
   echo $id;
   if (
      !empty($_POST["oppak"])
      && !empty($_POST["bezorg"])
      && !empty($_POST["ontvang"])

   ) {
      //allemaal moeten ze true zijn

      $oppak = $_POST["oppak"];
      $bezorg = $_POST['bezorg'];
      $ontvang = $_POST['ontvang'];

      //database connectie
      require 'classes/database.php';
      $sql = "UPDATE orders SET 
         oppak = '$oppak',
         bezorg = '$bezorg', 
         ontvang = '$ontvang' WHERE ID = '$id'  ";

      if (mysqli_query((new Database())->getConnection(), $sql)) {
         header("location: bestel_overzicht.php");
      }

      echo "Updated successfully";
      mysqli_close($conn); // Sluit de database verbinding
   }
}
