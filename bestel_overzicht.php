<?php require 'classes/database.php'; ?>

<?php

// hier moet de info van de anderen tabelen te voor schijn komen. 

$sql = "SELECT * FROM orders";

$sql = "SELECT *, user.achternaam as gebr_id, product.naam as product_id 
FROM orders 
JOIN user ON user.id = orders.gebr_id
JOIN product ON product.id = orders.product_id";

if ($result = mysqli_query((new Database())->getConnection(), $sql)) {
   $orders = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="css/style_index.css">
   <title>Roset</title>
</head>

<body>
   <header>
      <h1>Bekijk onze bestellingen</h1>
   </header>
   <p></p>
   <a href="bestel_registreer.php" class="shadow btn btn-success">Voeg een bestelling toe</a>

   <p></p>

   <table class="table table-striped table-dark">

      <thead>
         <tr>
            <!--<th>ID</th>-->
            <th>De besteller</th>
            <th>Welk product</th>
            <th>Heeft het opgepakt</th>
            <th>Bezorgd</th>
            <th>Hoeveel hebben ze ontvangen</th>
            <th>Verwijder</th>
            <th>Update</th>
         </tr>
      </thead>
      <tbody>
         <?php foreach ($orders as $order) : ?>
            <tr>
               <!--<td><?php echo $order["ID"] ?></td>-->
               <td><?php echo $order["gebr_id"] ?></td>
               <td><?php echo $order["product_id"] ?></td>
               <td><?php echo $order["oppak"] ?></td>
               <td><?php echo $order["bezorg"] ?></td>
               <td><?php echo $order["ontvang"] ?></td>
               <td><a href="bestel_delete.php?ID=<?php echo $order["ID"] ?>" class="btn btn-danger">Delete</a></td>
               <td><a href="bestel_update.php?ID=<?php echo $order["ID"] ?>" class="btn btn-warning">Update</a></td>
            </tr>
         <?php endforeach; ?>
      </tbody>
   </table>

   <footer>
      <a href="index.php" class="btn btn-info">Ga hier terug</a>
   </footer><br>
</body>


</html>