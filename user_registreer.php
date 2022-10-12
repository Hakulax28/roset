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

   $sql = "insert into user(voornaam,achternaam,email,wachtwoord,telefoonnummer,adres,postcode,woonplaats,rol)
									values('$voornaam','$achternaam','$email','$wachtwoord','$telefoon','$adres','$postcode','$stad','$rol')";
   //echo $sql;
   mysqli_query((new Database())->getConnection(), $sql);
   echo header("Location:inloggen.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="css/style.css">
   <title>De Roset</title>
</head>

<body>
   <form action="inloggen.php" method="post">
      <div class="row mx-auto">
         <div class="col-md-3 mx-auto">
            <p>Voornaam</p>
            <input type="text" name="voornaam" id="" class="form-control bg-dark text-white" placeholder="Vul je voornaam in" required>
            <p>Achternaam</p>
            <input type="text" name="achternaam" id="" class="form-control bg-dark text-white" placeholder="Vul je achternaam in" required>
            <p>E-Mail</p>
            <input type="email" name="email" id="" class="form-control bg-dark text-white" placeholder="Vul je email in" required>
            <p>Wachtwoord</p>
            <input type="password" name="wachtwoord" id="" class="form-control bg-dark text-white" placeholder="Vul je wachtwoord in" required>
            <p>Geboortedatum</p>
            <input type="date" name="geboortedatum" id="" class="form-control bg-dark text-white" placeholder="Vul je geboortedatum in" required>
         </div>
         <div class="col-md-3 mx-auto">
            <p>Telefoonnummer</p>
            <input type="tel" name="telefoonnummer" id="" class="form-control" placeholder="Vul je telefoonnummer in" required>
            <p>Adres</p>
            <input type="text" name="adres" id="" class="form-control" placeholder="Vul je adres in" required>
            <p>Postcode</p>
            <input type="text" name="postcode" id="" class="form-control" placeholder="Vul je postcode in" required>
            <p>Stad</p>
            <input type="text" name="stad" id="" class="form-control" placeholder="Vul je stad in" required>
            <p>Wat is uw rol?</p>
            <input type="text" name="rol" id="" class="form-control" placeholder="Vul je rol in" required>
         </div>
      </div>
      <br>
      <div class=" form-group">
         <button type="submit" class="shadow-sm btn btn-info" name="submit">Update gebruiker!</button>
         <a href="user_overzicht.php" class="shadow-sm btn btn-danger">Annuleer</a>
      </div><br>
   </form>
</body>

</html>