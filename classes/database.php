<?php

// Database configuratie


// Maak een  database connectie


class Database
{

   private $host  = "localhost";
   private $dbuser = "root";
   private $dbpass = "";
   private $dbname = "roset";

   private $conn;

   public function __construct()
   {
      $this->conn =  mysqli_connect($this->host, $this->dbuser, $this->dbpass, $this->dbname);
   }

   public function getConnection()
   {
      return $this->conn;
   }
}
