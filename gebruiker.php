<?php

session_start();

require 'classes/database.php';

$id = $_GET["id"]; //17

$sql = "SELECT * FROM user WHERE id = $id LIMIT 1";

if ($result = mysqli_query((new Database())->getConnection(), $sql)) {

   $user = mysqli_fetch_assoc($result);

   //var_dump($user);

   if (is_null($user)) {
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
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="flex.css">
   <title>De Roset</title>
</head>

<body>

   <div class="container">

      <aside class="s1">
         <br>
         <img src="img/logo.png" alt="" height="100px" width="100px">
         <h3>De Roset</h3>
      </aside>
      <header class="up">
         <button>
            <a href="hoofdpagina.php">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
               </svg>
               <p>Over ons</p>
            </a>
         </button>
         <button><a href="bestelling.php">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" class="bi bi-bag" viewBox="0 0 16 16">
                  <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
               </svg>
               <p>Bestellen</p>
            </a></button>
         <button><a href="blog.php">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" class="bi bi-archive" viewBox="0 0 16 16">
                  <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
               </svg>
               <p>Blog</p>
            </a></button>
         <button><a href="contact.php">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" class="bi bi-envelope" viewBox="0 0 16 16">
                  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
               </svg>
               <p>Contact ons</p>
            </a></button>
         <button><a href="winkelwagen.php">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" class="bi bi-cart" viewBox="0 0 16 16">
                  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
               </svg>
               <p>Winkelwagen</p>
            </a></button>
         <button><a href="gebruiker.php">
               <svg xmlns="http://www.w3.org/2000/svg" width=" 24" height="24" fill="#000000" class="bi bi-person-circle" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
               </svg>
               <p>Profiel</p>
            </a></button>
      </header>
      <aside class="s2">Smaak van de dag</aside>
      <article class="main">
         <h1>Update uw gegevens</h1><br>
         <form action="user_update_verwerk.php?id=<?php echo $id; ?>" method="post">
            <div class="row mx-auto">
               <div class="col-md-3 mx-auto">
                  <p>Voornaam</p>
                  <input type="text" name="voornaam" id="" class="form-control bg-dark text-white" value="<?php echo $user["voornaam"] ?>" placeholder="Vul je voornaam in" required>
                  <p>Achternaam</p>
                  <input type="text" name="achternaam" id="" class="form-control bg-dark text-white" value="<?php echo $user["achternaam"] ?>" placeholder="Vul je achternaam in" required>
                  <p>E-Mail</p>
                  <input type="email" name="email" id="" class="form-control bg-dark text-white" value="<?php echo $user["email"] ?>" placeholder="Vul je email in" required>
                  <p>Wachtwoord</p>
                  <input type="password" name="wachtwoord" id="" class="form-control bg-dark text-white" value="<?php echo $user["wachtwoord"] ?>" placeholder="Vul je wachtwoord in" required>
                  <p>Geboortedatum</p>
                  <input type="date" name="geboortedatum" id="" class="form-control bg-dark text-white" value="<?php echo $user["geboortedatum"] ?>" placeholder="Vul je geboortedatum in" required>
               </div>
               <div class="col-md-3 mx-auto">
                  <p>Telefoonnummer</p>
                  <input type="tel" name="telefoon" id="" class="form-control" value="<?php echo $user["telefoon"] ?>" placeholder="Vul je telefoonnummer in" required>
                  <p>Adres</p>
                  <input type="text" name="adres" id="" class="form-control" value="<?php echo $user["adres"] ?>" placeholder="Vul je adres in" required>
                  <p>Postcode</p>
                  <input type="text" name="postcode" id="" class="form-control" value="<?php echo $user["postcode"] ?>" placeholder="Vul je postcode in" required>
                  <p>Stad</p>
                  <input type="text" name="stad" id="" class="form-control" value="<?php echo $user["stad"] ?>" placeholder="Vul je stad in" required>
                  <p>Wat is uw rol?</p>
                  <input type="text" name="rol" id="" class="form-control" value="<?php echo $user["rol"] ?>" placeholder="Vul je rol in" required>
               </div>
            </div>
            <br>
            <div class=" form-group">
               <button type="submit" class="shadow-sm btn btn-info" name="submit">Update gebruiker!</button>
               <a href="user_overzicht.php" class="shadow-sm btn btn-danger">Annuleer</a>
            </div><br>
         </form>
      </article>
      <aside class="s3">Populaire smaken</aside>
      <footer class="under">
         <h3>Bestelingen</h3>
         <p></p>
      </footer>
   </div>

</body>

</html>