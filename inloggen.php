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
   <form action="login_proces.php" method="post">
      <p>E-Mail</p>
      <input type="text" name="email" id="" placeholder="Vul je username of email in">
      <p>Wachtwoord</p>
      <input type="text" name="wachtwoord" id="" placeholder="Vul je wachtwoord in">
      <p>Wat is uw rol?</p>
      <input type="text" name="rol" id="klant">klant<br>
      <input type="text" name="rol" id="medewerker">medewerker<br>
      <button type="submit">Inloggen</button>
   </form>
</body>

</html>