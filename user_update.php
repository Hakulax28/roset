<?php

session_start();

//require 'classes/user.php';

require 'classes/database.php';

$id = $_GET["id"]; //17

$sql = "SELECT * FROM user WHERE id = $id LIMIT 1";

if ($result = mysqli_query((new Database())->getConnection(), $sql)) {

   $user = mysqli_fetch_assoc($result);

   var_dump($user);

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
      <input type="text" name="voornaam" id="" class="form-control" value="<?php echo $user["voornaam"] ?>" placeholder="Vul je voornaam in" required>
      <p>Achternaam</p>
      <input type="text" name="achternaam" id="" class="form-control" value="<?php echo $user["achternaam"] ?>" placeholder="Vul je achternaam in" required>
      <p>E-Mail</p>
      <input type="email" name="email" id="" class="form-control" value="<?php echo $user["email"] ?>" placeholder="Vul je email in" required>
      <p>Wachtwoord</p>
      <input type="password" name="wachtwoord" id="" class="form-control" value="<?php echo $user["wachtwoord"] ?>" placeholder="Vul je wachtwoord in" required>
      <p>Geboortedatum</p>
      <input type="date" name="geboortedatum" id="" class="form-control" value="<?php echo $user["geboortedatum"] ?>" placeholder="Vul je geboortedatum in" required>
      <p>Telefoonnummer</p>
      <input type="tel" name="telefoonnummer" id="" class="form-control" value="<?php echo $user["telefoon"] ?>" placeholder="Vul je telefoonnummer in" required>
      <p>Adres</p>
      <input type="text" name="adres" id="" class="form-control" value="<?php echo $user["adres"] ?>" placeholder="Vul je adres in" required>
      <p>Postcode</p>
      <input type="text" name="postcode" id="" class="form-control" value="<?php echo $user["postcode"] ?>" placeholder="Vul je postcode in" required>
      <p>Stad</p>
      <input type="text" name="stad" id="" class="form-control" value="<?php echo $user["stad"] ?>" placeholder="Vul je stad in" required>
      <p>Wat is uw rol?</p>
      <input type="text" name="rol" id="" class="form-control" value="<?php echo $user["rol"] ?>" placeholder="Vul je rol in" required><br>
      <button type="submit">Update</button>
   </form>
</body>

</html>