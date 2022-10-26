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
   <h1>Registreer je nu in</h1><br>

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
            <input type="tel" name="telefoon" id="" class="form-control" placeholder="Vul je telefoonnummer in" required>
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
         <button type="submit" class="shadow-sm btn btn-info" name="submit">Registreer gebruiker!</button>
         <a href="inloggen.php" class="shadow-sm btn btn-danger">Annuleer</a>
      </div><br>
   </form>
</body>

</html>