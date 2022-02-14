<?php

class DataTim{
    private $nama = 0;
    private $asal = 0;
    private $tahun = 0;

    public function __construct($nama = 0, $asal = 0, $tahun = 0){
        $this->nama = $nama;
        $this->asal = $asal;
        $this->tahun = $tahun;
    }

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }

    public function setAsal($asal){
        $this->asal = $asal;
    }

    public function getAsal(){
        return $this->asal;
    }

    public function setTahun($tahun){
        $this->tahun = $tahun;
    }

    public function getTahun(){
        return $this->tahun;
    }
}

?>