<?php require 'classes/database.php'; ?>

<?php

// hier moet de info van de anderen tabelen te voor schijn komen. 

$sql = "SELECT * FROM product";

if ($result = mysqli_query((new Database())->getConnection(), $sql)) {
   $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
   <title>Roset</title>
</head>

<body>
   <header>
      <h1>Bekijk onze lekkere smaken</h1>
   </header>
   <p></p>
   <a href="product_registreer.php" class="shadow btn btn-success">Voeg een product toe</a>

   <p></p>

   <table class="table table-striped table-dark">

      <thead>
         <tr>
            <!--<th>ID</th>-->
            <th>Foto</th>
            <th>De smaak</th>
            <th>Prijs per kilogram</th>
            <th>is het de smaak van de week?</th>
            <th>Categorie</th>
            <th>Verwijder</th>
            <th>Update</th>
         </tr>
      </thead>
      <tbody>
         <?php foreach ($products as $product) : ?>
            <tr>
               <!--<td><?php echo $product["id"] ?></td>-->
               <td><?php echo $product["foto"] ?></a></td>
               <td><?php echo $product["naam"] ?></td>
               <td>€ <?php echo $product["prijs_per_kg"] ?></td>
               <td><?php echo $product["smaak_van_de_week"] ?></td>
               <td><?php echo $product["categorie"] ?></td>
               <td><a href="product_delete.php?id=<?php echo $product["id"] ?>" class="btn btn-danger">Delete</a></td>
               <td><a href="product_update.php?id=<?php echo $product["id"] ?>" class="btn btn-warning">Update</a></td>
            </tr>
         <?php endforeach; ?>
      </tbody>
   </table>

   <footer>
      <a href="index.php" class="btn btn-info">Ga hier terug</a>
   </footer>
</body>


</html>