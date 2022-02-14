<?php

class DataPemain extends DataTim{
    private $nomor = 0;
    private $posisi = 0;

    public function __construct($nomor = 0, $posisi = 0){
        $this->nomor = $nomor;
        $this->posisi = $posisi;
    }

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