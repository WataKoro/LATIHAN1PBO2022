<?php
//class data pemain inheritance dengan data tim
class DataPemain extends DataTim{
    //berisi nomor dan posisi, sisanya sudah inherit dari data tim
    private $nomor = 0;
    private $posisi = 0;
    
    //constructor
    public function __construct($nomor = 0, $posisi = 0){
        $this->nomor = $nomor;
        $this->posisi = $posisi;
    }
    
    //fungsi untuk menyimpan dan memanggil atribut dalam class
    public function setNomor($nomor){
        $this->nomor = $nomor;
    }

    public function getNomor(){
        return $this->nomor;
    }

    public function setPosisi($posisi){
        $this->posisi = $posisi;
    }

    public function getPosisi(){
        return $this->posisi;
    }
}

?>
