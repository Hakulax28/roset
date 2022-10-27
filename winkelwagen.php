<?php

require_once 'classes/database.php';

if (isset($_POST["submit"])) {

   if (
      !empty($_POST["user"])
      && !empty($_POST["product"])
      && !empty($_POST["oppak"])
      && !empty($_POST["bezorg"])
      && !empty($_POST["ontvang"])

   ) {
      // als op registreer wordt gedrukt 

      $user = $_POST['user'];
      $product = $_POST['product'];
      $oppak = $_POST["oppak"];
      $bezorg = $_POST['bezorg'];
      $ontvang = $_POST['ontvang'];

      //database connectie

      $sql = "INSERT INTO orders (gebr_id, product_id, oppak, bezorg, ontvang) 
                VALUES ('$user', '$product', '$oppak', '$bezorg', '$ontvang')";

      // Voer de INSERT INTO STATEMENT uit
      if (mysqli_query((new Database())->getConnection(), $sql)) {
         header("location: hoofdpagina.php");
         exit;
      }
      die("");
   }
}

$sql = "SELECT foto FROM product WHERE smaak_van_de_week = 'ja'";

if ($result = mysqli_query((new Database())->getConnection(), $sql)) {
   $foto = mysqli_fetch_assoc($result);
}

// hier moet de info van alle producten erop komen. 

$sql = "SELECT * FROM user";
$result = mysqli_query((new Database())->getConnection(), $sql);
$all_users = mysqli_fetch_all($result, MYSQLI_ASSOC);

$sql = "SELECT * FROM product";
$result = mysqli_query((new Database())->getConnection(), $sql);
$all_products = mysqli_fetch_all($result, MYSQLI_ASSOC);

//$id = $_GET["id"]; //17

//$sql = "SELECT * FROM product WHERE id = $id LIMIT 1";

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="De winkelwagen">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="flex.css">
   <title>De Roset</title>
</head>

<body>

   <div class="container">
      <aside class="s1">
         <br>
         <img src="img/logo.png" alt="">
         <h2>De Roset</h2>
      </aside>
      <header class="up">
         <a href="hoofdpagina.php" style="box-shadow: 0px 1px 5px; border-style:solid;">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
               <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
            </svg>
         </a>
         <a href="bestelling.php" style="box-shadow: 0px 1px 5px; border-style:solid;">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
               <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
            </svg>
         </a>
         <a href="blog.php" style="box-shadow: 0px 1px 5px; border-style:solid;">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
               <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
            </svg>
         </a>
         <a href="contact.php" style="box-shadow: 0px 1px 5px; border-style:solid;">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
               <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
            </svg>
         </a>
         <a href="winkelwagen.php" style="box-shadow: 0px 1px 5px; border-style:solid;">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
               <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
            </svg>
         </a>
         <a href="gebruiker.php?id=2" style="box-shadow: 0px 1px 5px; border-style:solid;">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
               <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
               <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg>
         </a>
      </header>
      <aside class="s2">
         <h1>Smaak van de dag</h1><br>
         <a href="winkelwagen.php?id=1"><img src="image/<?php echo $foto["foto"] ?>.jpg" alt="">
            <div>Bestel de smaak nu!</div>
         </a>
      </aside>
      <article class="main">
         <h1>Bestel uw product</h1><br>
         <section>
            <form action="winkelwagen.php" method="post">
               <div>
                  <div>
                     <h2>De besteller</h2>
                     <select name="user">
                        <?php
                        foreach ($all_users as $use) : ?>
                           <option selected='selected' value='<?php echo $use['id'] ?>'><?php echo $use["achternaam"] ?></option>
                        <?php endforeach ?>
                     </select><br>
                     <h2>De product</h2>
                     <select name="product">
                        <?php foreach ($all_products as $use) : ?>
                           <option selected='selected' value='<?php echo $use['id'] ?>'><?php echo $use['naam'] ?></option>
                        <?php endforeach ?>
                     </select><br>
                     <h2>Waar wil je het bezorgd?</h2>
                     <input type="text" name="" id="" class="form-control"><br>
                  </div>
                  <div class="col-md-3 mx-auto">
                     <h2>Opgepakt</h2>
                     <input type="datetime-local" name="oppak" id="oppak" class="form-control" required><br>
                     <h2>Bezorgd</h2>
                     <input type="datetime-local" name="bezorg" id="bezorg" class="form-control" required><br>
                  </div>
               </div>
               <div class="col-md-3 mx-auto">
                  <h2>Ontvangen</h2>
                  <input type="text" name="ontvang" id="ontvang" class="form-control" placeholder="Vul de ontvanging toe" required><br>
               </div><br>
               <div class=" form-group">
                  <a href="" type="submit" name="submit" style="box-shadow: 0px 1px 5px; border-style:solid;"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                        <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                     </svg>
                     Bestel jouw ijsje!</a>
               </div><br>
            </form>
         </section>
      </article>
      <aside class="s3">
         <h1>Populaire smaken</h1>
         <br>
         <img src="image/blauw_maan.jpg" alt="" srcset="">
         <img src="image/vanille.jpg" alt="" srcset="">
         <img src="image/koekdeeg.jpg" alt="" srcset="">
      </aside>
      <footer class="under">
         <section class="se2">
            <h1>Ijssalon De Roset</h1>
            <p>Castricum, Geesterduin 39</p>
            <p>1902 EJ, 0251654683</p>
         </section>
         <section class="se2">
            <h1>Bestelingen</h1>
         </section>
         <section class="se2">
            <a href="index.php" style="box-shadow: 0px 1px 5px; border-style:solid;">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
                  <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z" />
                  <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z" />
               </svg>
               Ga hier terug</a>
            <a href="https://www.deroset.nl/pg-28689-7-93854/pagina/welkom.html" style="box-shadow: 0px 1px 5px; border-style:solid;"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-back" viewBox="0 0 16 16">
                  <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2z" />
               </svg> Hoofd website</a>
         </section>
      </footer>
   </div>

</body>

</html>