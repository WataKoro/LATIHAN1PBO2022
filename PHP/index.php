<?php
include "DataTim.php";
include "DataPemain.php";

//define dan input isi class data tim
$tim = new DataTim();
$tim->setNama("Madrid");
$tim->setAsal("Spanyol");
$tim->setTahun(1902);

//print atribut data tim
echo "=================================". "<br>";
echo "Nama Tim : ". $tim->getNama() . "<br>";
echo "Asal : ". $tim->getAsal() . "<br>";
echo "Berdiri : ". $tim->getTahun() . "<br>";
echo "=================================". "<br>";

//input atribut data pemain
$pemain1 = new DataPemain();
$pemain1->setNama("Marcelo");
$pemain1->setNomor(12);
$pemain1->setPosisi("Defender");
$pemain1->setAsal("Brasil");
$pemain1->setTahun(1988);

$pemain2 = new DataPemain();
$pemain2->setNama("Benzema");
$pemain2->setNomor(9);
$pemain2->setPosisi("Forward");
$pemain2->setAsal("Perancis");
$pemain2->setTahun(1987);

//print atribut class data pemain
echo "=================================". "<br>";
echo "Nama Pemain : ". $pemain1->getNama() . "<br>";
echo "Nomor : ". $pemain1->getNomor() . "<br>";
echo "Posisi : ". $pemain1->getPosisi() . "<br>";
echo "Asal : ". $pemain1->getAsal() . "<br>";
echo "Tahun Lahir : ". $pemain1->getTahun() . "<br>";
echo "=================================". "<br>";

echo "=================================". "<br>";
echo "Nama Pemain : ". $pemain2->getNama() . "<br>";
echo "Nomor : ". $pemain2->getNomor() . "<br>";
echo "Posisi : ". $pemain2->getPosisi() . "<br>";
echo "Asal : ". $pemain2->getAsal() . "<br>";
echo "Tahun Lahir : ". $pemain2->getTahun() . "<br>";
echo "=================================". "<br>";

?>
