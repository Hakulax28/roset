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
   <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
   <link rel="stylesheet" href="css/style.css">
   <title>De Roset</title>
</head>

<body>
   <a href="loguit.php">Log uit</a>
   <a href="user_overzicht.php">kijk naar alle gebruikers</a>
   <a href="product_overzicht.php">kijk naar alle smaaken</a>
</body>

</html>