<?php
require 'classes/database.php';

$id = $_GET["id"]; //17

$sql = "SELECT * FROM orders WHERE id = $id LIMIT 1";

$sql = "SELECT *, user.voornaam as user_id, product.naam as product_id
FROM orders 
JOIN user ON user.id = orders.user_id 
JOIN product ON product.id = orders.product_id";

if ($result = mysqli_query((new Database())->getConnection(), $sql)) {

   $order = mysqli_fetch_assoc($result);

   if (is_null($order)) {
      header("location: bestel_overzicht.php");
   }
}

$sql = "SELECT * FROM user";
$result = mysqli_query((new Database())->getConnection(), $sql);


$sql = "SELECT * FROM product";
$result = mysqli_query((new Database())->getConnection(), $sql);
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
   <h1>Update de bestelling</h1><br>
   <form action="bestel_update_verwerk.php?id=<?php echo $id; ?>" method="post">
      <div class="row mx-auto">
         <div class="col-md-3 mx-auto">
            <p>De besteller</p>
            <input type="text" name="" id="" class="form-control bg-dark text-white" placeholder="<?php echo $order["voornaam"] ?>" disabled>
            <p>De product</p>
            <input type="text" name="" id="" class="form-control bg-dark text-white" placeholder="<?php echo $order["naam"] ?>" disabled><br>
         </div>
         <div class="col-md-3 mx-auto">
            <p>Opgepakt</p>
            <input type="datetime" name="oppak" id="oppak" class="form-control" value="<?php echo $order["oppak"] ?>" placeholder="Vul de naam van de ijs in" required><br>
            <p>Bezorgd</p>
            <input type="datetime" name="bezorg" id="bezorg" class="form-control" value="<?php echo $order["bezorg"] ?>" placeholder="Vul de prijs in" required><br>
         </div>
      </div>
      <div class="col-md-3 mx-auto">
         <p>Ontvangen</p>
         <input type="text" name="ontvang" id="ontvang" class="form-control" value="<?php echo $order["ontvang"] ?>" placeholder="Vul de naam van de ijs in" required><br>
      </div><br>
      <div class=" form-group">
         <button type="submit" class="shadow-sm btn btn-info" name="submit">Update bestelling!</button>
         <a href="bestel_overzicht.php" class="shadow-sm btn btn-danger">Annuleer</a>
      </div><br>

   </form>

</body>

</html>