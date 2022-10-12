<?php

session_start();

require 'classes/user.php';

$id = $_GET["id"]; //17

$sql = "SELECT * FROM user WHERE id = $id LIMIT 1";

if ($result = mysqli_query((new Database())->getConnection(), $sql)) {

   $user = mysqli_fetch_assoc($result);

   if (is_null($user)) {
      header("location: user_overzicht.php");
   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <title>De Roset</title>
</head>

<body>
   <form action="user_update_verwerk.php" method="post">
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
      <input type="text" name="rol" id="" placeholder="Vul je rol in" required><br>
      <button type="submit">Update</button>
   </form>
</body>

</html>