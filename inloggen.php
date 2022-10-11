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
   <form action="login_proces.php" method="post">
      <p>E-Mail</p>
      <input type="text" name="email" id="" placeholder="Vul je username of email in">
      <p>Wachtwoord</p>
      <input type="text" name="wachtwoord" id="" placeholder="Vul je wachtwoord in">
      <p>Wat is uw rol?</p>
      <input type="radio" name="rol" id="klant">klant<br>
      <input type="radio" name="rol" id="medewerker">medewerker<br>
      <button type="submit">Inloggen</button>
   </form>
</body>

</html>