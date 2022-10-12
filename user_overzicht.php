<?php require 'classes/database.php';

// hier moet de info van de anderen tabelen te voor schijn komen. 

$sql = "SELECT * FROM users ";

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

   <a href="user_registreer.php" class="shadow-sm btn btn-success">Nieuwe gebruiker</a>
   <a href="loguit.php" class="shadow-sm btn btn-danger">Log uit</a>

   <table class="table table-striped table-dark">

      <thead>
         <tr>
            <th>ID</th>
            <th>Voornaam</th>
            <th>Achternaam</th>
            <th>Email</th>
            <th>Wachtwoord</th>
            <th>Geboortedatum</th>
            <th>Telefoonnummer</th>
            <th>Rol</th>
            <th>Verwijder</th>
            <th>Update</th>
         </tr>
      </thead>
      <tbody>
         <?php foreach ($users as $user) : ?>
            <tr>
               <td><?php echo $user["id"] ?></td>
               <td><?php echo $user["voornaam"] ?></td>
               <td><?php echo $user["achternaam"] ?></td>
               <td><?php echo $user["email"] ?></td>
               <td><?php echo $user["wachtwoord"] ?></td>
               <td><?php echo $user["geboortedatum"] ?></td>
               <td><?php echo $user["telefoonnummer"] ?></td>
               <td><?php echo $user["rol"] ?></td>
               <td><a href="gebruiker-delete.php?id=<?php echo $user["id"] ?>" class="btn btn-danger">Delete</a></td>
               <td><a href="gebruiker-update.php?id=<?php echo $user["id"] ?>" class="btn btn-warning">Update</a></td>
            </tr>
         <?php endforeach; ?>
      </tbody>
   </table>

   <footer>
      <a href="dashboard.php">Ga hier terug</a>
   </footer>
</body>


</html>