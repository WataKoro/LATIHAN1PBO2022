<?php
include "ListMahasiswa.php";

$list = new ListMahasiswa();
$list->setNama("Irfan Mochamad Esa");
$list->setNim(2005568);
$list->setKelamin("Pria");
$list->setProdi("Ilmu Komputer");
$list->setSemester(4);

echo "=================================". "<br>";
echo "Nama     : ". $list->getNama() . "<br>";
echo "NIM      : ". $list->getNim() . "<br>";
echo "Kelamin  : ". $list->getKelamin() . "<br>";
echo "Prodi    : ". $list->getProdi() . "<br>";
echo "Semester : ". $list->getSemester() . "<br>";
echo "=================================". "<br>";

?>