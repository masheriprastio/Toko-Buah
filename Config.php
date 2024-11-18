<?php

class Config{
    private $conn;
    //Fungsi
    public function koneksi(){
        $this->conn = new mysqli("localhost","root","","db_tokoh_buah");

        if($this->conn->connect_error){
            error_log('Connection error: ' . $this->conn->connect_error);
        }
        else{
            return $this->conn;
            
        }
        

    }
    
}
// $koneksi = new Config();
// $koneksi->koneksi();