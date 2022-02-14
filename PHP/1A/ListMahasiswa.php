<?php

class ListMahasiswa{

    private $nama = 0;
    private $nim = 0;
    private $kelamin = 0;
    private $prodi = 0;
    private $semester = 0;

    public function __construct($nama = 0, $nim = 0, $kelamin = 0, $prodi = 0, $semester = 0){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->kelamin = $kelamin;
        $this->prodi = $prodi;
        $this->semester = $semester;
    }

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }

    public function setNim($nim){
        $this->nim = $nim;
    }

    public function getNim(){
        return $this->nim;
    }

    public function setKelamin($kelamin){
        $this->kelamin = $kelamin;
    }

    public function getKelamin(){
        return $this->kelamin;
    }

    public function setProdi($prodi){
        $this->prodi = $prodi;
    }

    public function getProdi(){
        return $this->prodi;
    }

    public function setSemester($semester){
        $this->semester = $semester;
    }

    public function getSemester(){
        return $this->semester;
    }
}

?>