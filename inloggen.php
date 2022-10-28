<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="css/style_index.css">
   <title>De Roset</title>
</head>

<body>
   <h1>Log nu in</h1>
   <form action="login_proces.php" method="post">
      <br>
      <p>E-Mail</p>
      <input type="text" name="email" id="" class="form-control bg-dark text-white" placeholder="Vul je username of email in">
      <br>
      <p>Wachtwoord</p>
      <input type="text" name="wachtwoord" id="" class="form-control bg-dark text-white" placeholder="Vul je wachtwoord in"><br><br>
      <p>Wat is uw rol?</p>
      <input type="text" name="rol" id="" class="form-control bg-dark text-white" placeholder="Wat is uw rol"><br>
      <button type="submit" class="shadow-sm btn btn-info"><a>Inloggen</a></button>
      <a href="registreren.php" class="shadow-sm btn btn-info">Klik hier om te registreren.</a>
   </form>
</body>

</html>