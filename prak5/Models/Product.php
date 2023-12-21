<?php

namespace app\Models;

include "../app/Config/DatabaseConfig.php";

use app\Config\DatabaseConfig;
use mysqli;

class Product extends DatabaseConfig
{
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->database_name, $this->port);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function findAll()
    {
        $sql = "SELECT * FROM products";
        $result = $this->conn->query($sql);
        $data = [];

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        $this->conn->close();
        return $data;
    }

    public function findById($id)
    {
        // Implement findById method here
    }

    public function create($data)
    {
        // Implement create method here
    }

    public function update($data, $id)
    {
        // Implement update method here
    }

    public function destroy($id)
    {
        // Implement destroy method here
    }
}
