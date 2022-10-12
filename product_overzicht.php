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
   <link rel="stylesheet" href="style.css">
   <title>Snack'in Sea</title>
</head>

<body>
   <header>
      <h1>Welkom bij Snack'in Sea!</h1>
   </header>

   <a href="registreer-product.php" class="shadow-sm btn btn-success">Voeg een product toe</a>

   <p></p>

   <table class="table table-striped table-dark">

      <thead>
         <tr>
            <!--<th>ID</th>-->
            <th>De producten</th>
            <th>Kostprijs</th>
            <th>Verkoopprijs</th>
            <th>Categorie</th>
            <th>Verwijder</th>
            <th>Update</th>
         </tr>
      </thead>
      <tbody>
         <?php foreach ($products as $product) : ?>
            <tr>
               <!--<td><?php echo $product["id"] ?></td>-->
               <td><a href="product-info.php"><?php echo $product["naam"] ?></a></td>
               <td><?php echo $product["kostprijs"] ?></td>
               <td><?php echo $product["verkoopprijs"] ?></td>
               <td><?php echo $product["category"] ?></td>
               <td><a href="product-delete.php?id=<?php echo $product["id"] ?>" class="btn btn-danger">Delete</a></td>
               <td><a href="product-update.php?id=<?php echo $product["id"] ?>" class="btn btn-warning">Update</a></td>
            </tr>
         <?php endforeach; ?>
      </tbody>
   </table>

   <footer>
      <a href="dashboard.php">Ga hier terug</a>
   </footer>
</body>


</html>