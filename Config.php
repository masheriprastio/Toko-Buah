<?php

class Config{
    private $conn;
    //Fungsi
    function koneksi(){
        $this->conn = new mysqli("localhost","root","","db_toko_buah");

        if($this->conn->connect_error){
            die("Gagal");
        }
        return $this->conn;

    }
    
}
$koneksi = new Config();
$koneksi->koneksi()
;