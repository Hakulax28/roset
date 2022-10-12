<?php

session_start();

//require 'classes/user.php';

require 'classes/database.php';

$id = $_GET["id"]; //17

$sql = "SELECT * FROM product WHERE id = $id LIMIT 1";

if ($result = mysqli_query((new Database())->getConnection(), $sql)) {

   $product = mysqli_fetch_assoc($result);

   //var_dump($product);

   if (is_null($product)) {
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
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="css/style.css">
   <title>De Roset</title>
</head>

<body>
   <h1>Update uw gegevens</h1><br>
   <form action="product_update_verwerk.php?id=<?php echo $id; ?>" method="post">
      <div class="row mx-auto">
         <div class="col-md-3 mx-auto">
            <p>Naam</p>
            <input type="text" name="naam" id="" class="form-control bg-dark text-white" value="<?php echo $product["naam"] ?>" placeholder="Vul de naam van de ijs in" required><br>
            <p>Prijs per Kilogram </p>
            <input type="text" name="prijs_per_kg" id="" class="form-control bg-dark text-white" value="<?php echo $product["prijs_per_kg"] ?>" placeholder="Vul de prijs in" required><br>
         </div>
         <div class="col-md-3 mx-auto">
            <p>De smaak van de week</p>
            <input type="text" name="smaak_van_de_week" id="" class="form-control" value="<?php echo $product["smaak_van_de_week"] ?>" placeholder="Vul de smaak van de week in" required><br>
            <p>Categorie</p>
            <input type="text" name="categorie" id="" class="form-control" value="<?php echo $product["categorie"] ?>" placeholder="Vul de categorie in" required><br>
         </div>
      </div>
      <br>
      <div class=" form-group">
         <button type="submit" class="shadow-sm btn btn-info" name="submit">Update gebruiker!</button>
         <a href="product_overzicht.php" class="shadow-sm btn btn-danger">Annuleer</a>
      </div><br>
   </form>
</body>

</html>