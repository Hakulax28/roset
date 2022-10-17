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
   <h1>Registreer de smaak</h1><br>

   <form action="product_registreer_verwerk.php" method="post">
      <div class="row mx-auto">
         <div class="col-md-3 mx-auto">
            <p>Naam</p>
            <input type="text" name="naam" id="" class="form-control bg-dark text-white" placeholder="Vul de naam van de ijs in" required><br>
            <p>Prijs per Kilogram </p>
            <input type="text" name="prijs_per_kg" id="" class="form-control bg-dark text-white" placeholder="Vul de prijs in" required><br>
         </div>
         <div class="col-md-3 mx-auto">
            <p>De smaak van de week</p>
            <input type="text" name="smaak_van_de_week" id="" class="form-control" placeholder="Vul de smaak van de week in" required><br>
            <p>Categorie</p>
            <input type="text" name="categorie" id="" class="form-control" placeholder="Vul de categorie in" required><br>
         </div>
      </div>
      <br>
      <div class=" form-group">
         <button type="submit" class="shadow-sm btn btn-info" name="submit">Registreer de smaak!</button>
         <a href="product_overzicht.php" class="shadow-sm btn btn-danger">Annuleer</a>
      </div><br>
   </form>
</body>

</html>