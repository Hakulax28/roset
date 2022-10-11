<?php require 'classes/database.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
   <title>De Roset</title>
</head>

<body>
   <form action="inloggen.php" method="post">
      <p>Voornaam</p>
      <input type="text" name="voornaam" id="" placeholder="Vul je voornaam in">
      <p>Achternaam</p>
      <input type="text" name="achternaam" id="" placeholder="Vul je achternaam in">
      <p>E-Mail</p>
      <input type="text" name="email" id="" placeholder="Vul je email in">
      <p>Wachtwoord</p>
      <input type="text" name="wachtwoord" id="" placeholder="Vul je wachtwoord in">
      <p>Geboortedatum</p>
      <input type="date" name="geboortedatum" id="" placeholder="Vul je geboortedatum in">
      <p>Telefoonnummer</p>
      <input type="tel" name="telefoonnummer" id="" placeholder="Vul je telefoonnummer in">
      <p>Adres</p>
      <input type="text" name="adres" id="" placeholder="Vul je adres in">
      <p>Postcode</p>
      <input type="text" name="postcode" id="" placeholder="Vul je postcode in">
      <p>Stad</p>
      <input type="text" name="stad" id="" placeholder="Vul je stad in">
      <p>Wat is uw rol?</p>
      <input type="text" name="rol" id="" placeholder="Vul je rol in">
      <button type="submit">Inloggen</button>
   </form>
</body>

</html>