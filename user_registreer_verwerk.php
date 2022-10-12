<?php
// variabalen initialiseren
$voornaam = "";
$achternaam = "";
$email = "";
$wachtwoord = "";
$telefoon = "";
$adres = "";
$postcode = "";
$woonplaats = "";
$rol = "";

//connectie met database
require 'classes/database.php';

// als op registreer wordt gedrukt
if (isset($_POST['submit'])) {
   $voornaam     = $_POST['voornaam'];
   $achternaam    = $_POST['achternaam'];
   $email          = $_POST['email'];
   $wachtwoord    = $_POST['wachtwoord'];
   $telefoon      = $_POST['telefoon'];
   $adres          = $_POST['adres'];
   $postcode      = $_POST['postcode'];
   $stad      = $_POST['stad'];
   $rol          = $_POST['rol'];

   $sql = "insert into user(voornaam,achternaam,email,wachtwoord,telefoonnummer,adres,postcode,woonplaats,rol)
									values('$voornaam','$achternaam','$email','$wachtwoord','$telefoon','$adres','$postcode','$stad','$rol')";
   //echo $sql;
   mysqli_query((new Database())->getConnection(), $sql);
   echo header("Location:inloggen.php");
}
