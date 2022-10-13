<?php

session_start();

//if (!$_SESSION["is_logged_in"]) {
//header("location: inloggen.php");
//}
//if ($_SESSION["rol"] == "medewerker") {
//    echo "U kan nu alles doen";
//} else if ($_SESSION["rol"] == "klant") {
//    echo "U kan alleen een melding registreren registreren";
//}

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
<header>
   <h1>Welkom bij De Roset!</h1>
   <p>Kies één van deze opties</p>
</header>

<body>

   <a href="hoofdpagina.php" class="shadow btn btn-success">Hoofdpagina</a><br><br>
   <a href="user_overzicht.php" class="shadow btn btn-info">Gebruikers/aanpassingen</a>
   <a href="product_overzicht.php" class="shadow btn btn-info">Alle smaaken</a>
   <a href="bestel_overzicht.php" class="shadow btn btn-info">De bestelingen</a><br><br>
   <a href="loguit.php" class="shadow btn btn-danger">Log uit</a><br><br>
</body>
<footer>
   <p>Gemaakt door: Cho Lommerse, Nova College</p>
</footer>

</html>