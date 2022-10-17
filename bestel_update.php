<?php

session_start();

require 'classes/database.php';

$id = $_GET["ID"]; //17

$sql = "SELECT * FROM orders WHERE ID = $id LIMIT 1";

if ($result = mysqli_query((new Database())->getConnection(), $sql)) {

   $order = mysqli_fetch_assoc($result);

   if (is_null($order)) {
      header("location: bestel_overzicht.php");
   }
}

$sql = "SELECT * FROM user";
if ($result = mysqli_query((new Database())->getConnection(), $sql)) {
   $all_users = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

$sql = "SELECT * FROM product";
if ($result = mysqli_query((new Database())->getConnection(), $sql)) {
   $all_products = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
   <h1>Update de bestelling</h1><br>
   <form action="bestel_update_verwerk.php?id=<?php echo $id; ?>" method="post">
      <div class="row mx-auto">
         <div class="col-md-3 mx-auto">
            <p>De besteller</p>
            <select class="form-select bg-dark text-white" name="user">
               <?php
               foreach ($all_users as $use) : ?>
                  <option selected='selected' value='<?php echo $use['id'] ?>'><?php echo $use["achternaam"] ?></option>
               <?php endforeach ?>
            </select><br>
            <p>De product</p>
            <select class="form-select bg-dark text-white" name="product">
               <?php
               foreach ($all_products as $use) : ?>
                  <option selected='selected' value='<?php echo $use['id'] ?>'><?php echo $use['naam'] ?></option>
               <?php endforeach ?>
            </select><br>
         </div>
         <div class="col-md-3 mx-auto">
            <p>Opgepakt</p>
            <input type="datetime-local" name="oppak" id="oppak" class="form-control" value="<?php echo $order["oppak"] ?>" required><br>
            <p>Bezorgd</p>
            <input type="datetime-local" name="bezorg" id="bezorg" class="form-control" value="<?php echo $order["bezorg"] ?>" required><br>
            <p>Ontvangen</p>
            <input type="text" name="ontvang" id="ontvang" class="form-control" value="<?php echo $order["ontvang"] ?>" required>
            <br>
         </div>

         <div class=" form-group">
            <button type="submit" class="shadow-sm btn btn-info" name="submit">Update gebruiker!</button>
            <a href="bestel_overzicht.php" class="shadow-sm btn btn-danger">Annuleer</a>
         </div><br>

   </form>

</body>

</html>