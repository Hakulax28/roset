<?php
class User
{
    private $conn;
    private $tableName = "user";


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
        $sql = "SELECT * FROM user WHERE id = $id";

        return mysqli_fetch_assoc($this->query($sql));
    }

    public function getAll()
    {
        $sql = "SELECT * FROM user";

        return mysqli_fetch_all($this->query($sql));
    }
}

$user = new User($conn);

print_r($user->getSingle(1));