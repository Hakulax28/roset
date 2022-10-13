<?php

if (isset($_POST["submit"])) {

   $id = $_GET["id"];
   echo $id;
   if (
      !empty($_POST["user"])
      && !empty($_POST["product"])
      && !empty($_POST["oppak"])
      && !empty($_POST["bezorg"])
      && !empty($_POST["ontvang"])

   ) {

      //allemaal moeten ze true zijn
      $user = $_POST['user'];
      $product = $_POST['product'];
      $oppak = $_POST["oppak"];
      $bezorg = $_POST['bezorg'];
      $ontvang = $_POST['ontvang'];

      //database connectie
      require 'classes/database.php';
      $sql = "UPDATE orders SET 
         user_id = '$user', 
         product_id = '$product', 
         oppak = '$oppak', 
         bezorg = '$bezorg',
         ontvang = '$ontvang',  WHERE id = '$id'  ";

      if (mysqli_query((new Database())->getConnection(), $sql)) {
         header("location: bestel_overzicht.php");
      }

      echo "Updated successfully";
      mysqli_close($conn); // Sluit de database verbinding
   }
}
