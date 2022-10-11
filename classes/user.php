<?php
class User
{
   private $conn;
   private $tableName = "users";


   public function __construct($conn)
   {
      $this->conn = $conn;
   }

   private function query($sql)
   {
      return mysqli_query($this->conn, $sql);
   }

   public function getSingle($id)
   {
      $sql = "SELECT * FROM users WHERE id = $id";

      return mysqli_fetch_assoc($this->query($sql));
   }

   public function getAll()
   {
      $sql = "SELECT * FROM users";

      return mysqli_fetch_all($this->query($sql));
   }
}

$user = new User($conn);

print_r($user->getSingle(1));