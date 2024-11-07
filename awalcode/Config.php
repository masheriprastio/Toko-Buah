<?php

class Config
{

    private $conn;
    function config_connection()
    {
        $this->conn = new mysqli("localhost", "root", "", "db_toko_buah");
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        return $this->conn;
    }
}
