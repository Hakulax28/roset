<?php

session_start();

require 'classes/database.php';

$id = $_GET["id"]; //17

$sql = "SELECT * FROM orders WHERE id = $id LIMIT 1";

if ($result = mysqli_query((new Database())->getConnection(), $sql)) {

   $order = mysqli_fetch_assoc($result);

   if (is_null($order)) {
      header("location: bestel_overzicht.php");
   }
}

$sql = "SELECT *, user.voornaam as user_id, product.naam as product_id
FROM orders 
JOIN user ON user.id = orders.user_id 
JOIN product ON product.id = orders.product_id";

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
   <title>Document</title>
</head>

<body>

   <form action="bestel_update_verwerk.php" method="post">

      <input type="hidden" name="id" value="<?php echo $user["id"] ?>">
      <div class=" form-group">
         <label for="user">De besteller</label>
         <input type="text" name="user" id="user" class="form-control" value="<?php echo $user["user_id"] ?>">
      </div><br>
      <div class=" form-group">
         <label for="product">De product</label>
         <input type="text" name="product" id="product" class="form-control" value="<?php echo $user["product_id"] ?>">
      </div><br>
      <div class=" form-group">
         <label for="oppak">Opgepakt</label>
         <input type="text" name="oppak" id="oppak" class="form-control" value="<?php echo $user["oppak"] ?>">
      </div><br>
      <div class=" form-group">
         <label for="bezorg">Bezorgd</label>
         <input type="text" name="bezorg" id="bezorg" class="form-control" value="<?php echo $user["bezorg"] ?>">
      </div><br>
      <div class="form-group">
         <label for="ontvang">Ontvangt</label>
         <input type="date" name="ontvang" id="ontvang" class="form-control" value="<?php echo $user["ontvang"] ?>">
      </div><br>
      <div class=" form-group">
         <button type="submit" class="shadow-sm btn btn-info" name="submit">Update gebruiker!</button>
         <a href="bestel_overzicht.php" class="shadow-sm btn btn-danger">Annuleer</a>
      </div><br>

   </form>

</body>

</html>