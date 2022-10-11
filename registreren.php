<?php
// variabalen initialiseren
$voornaam = "";
$achternaam = "";
$email = "";
$wachtwoord = "";
$telefoon = "";
$adres = "";
$postcode = "";
$woonplaats = "";
$rol = "";

//connectie met database
require 'classes/database.php';

// als op registreer wordt gedrukt
if (isset($_POST['submit'])) {
   $voornaam     = $_POST['voornaam'];
   $achternaam    = $_POST['achternaam'];
   $email          = $_POST['email'];
   $wachtwoord    = $_POST['wachtwoord'];
   $telefoon      = $_POST['telefoon'];
   $adres          = $_POST['adres'];
   $postcode      = $_POST['postcode'];
   $stad      = $_POST['stad'];
   $rol          = $_POST['rol'];

   if (count($invoerfouten) == 0) {
      $sql = "insert into gebruikers(voornaam,achternaam,email,wachtwoord,telefoonnummer,adres,postcode,woonplaats,rol)
									values('$voornaam','$achternaam','$email','$wachtwoord','$telefoon','$adres','$postcode','$stad','$rol')";
      //echo $sql;
      mysqli_query((new Database())->getConnection(), $sql);
      header("Location:login.php");
   } else {
      foreach ($invoerfouten as $invoerfout) {
         echo $invoerfout . "<br>";
      }
   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <title>De Roset</title>
</head>

<body>
   <form action="inloggen.php" method="post">
      <p>Voornaam</p>
      <input type="text" name="voornaam" id="" placeholder="Vul je voornaam in" required>
      <p>Achternaam</p>
      <input type="text" name="achternaam" id="" placeholder="Vul je achternaam in" required>
      <p>E-Mail</p>
      <input type="email" name="email" id="" placeholder="Vul je email in" required>
      <p>Wachtwoord</p>
      <input type="password" name="wachtwoord" id="" placeholder="Vul je wachtwoord in" required>
      <p>Geboortedatum</p>
      <input type="date" name="geboortedatum" id="" placeholder="Vul je geboortedatum in" required>
      <p>Telefoonnummer</p>
      <input type="tel" name="telefoonnummer" id="" placeholder="Vul je telefoonnummer in" required>
      <p>Adres</p>
      <input type="text" name="adres" id="" placeholder="Vul je adres in" required>
      <p>Postcode</p>
      <input type="text" name="postcode" id="" placeholder="Vul je postcode in" required>
      <p>Stad</p>
      <input type="text" name="stad" id="" placeholder="Vul je stad in" required>
      <p>Wat is uw rol?</p>
      <input type="text" name="rol" id="" placeholder="Vul je rol in" required>
      <button type="submit">Inloggen</button>
      <input type="reset" value="">
   </form>
</body>

</html>