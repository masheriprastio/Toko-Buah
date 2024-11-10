<?php

class Orang{
    public $nama, $umur, $alamat;


    function __construct($name,$usia, $rmh){
        $this->nama= $name;
        $this->umur= $usia;
        $this->alamat = $rmh;

    }
    function panggilHalo(){
        echo "Halo " . $this->nama . "<br/>". $this->umur . " " . $this->alamat;
    }

}
$panggil = new Orang("Abraham",16, "JL JP PUSAT");
$panggil->panggilHalo();