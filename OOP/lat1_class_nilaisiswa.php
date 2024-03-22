<?php

//OOP (object Oriented Progammer)
//class: template/blueprint (denah rumah)
//object: isi, rumah

//class
class NilaiSiswa
{
    public $nama;
    public $nilai;
    public $matakuliah;

    public function getHasil(){
        if ($this->nilai > 55) return "LULUS";
        else return "TIDAK LULUS";
    }
}

//object

$ns1 = new NilaiSiswa();
$ns1->nama = "May";
$ns1->nilai = 90;
$ns1->matakuliah = "PemWeb";

//echo
echo "Nama Mahasiswa: $ns1->nama <br>" ;
echo "Nilai: $ns1->nilai <br>";
echo "Mata Kuliah: $ns1->matakuliah <br>";
echo "Status: ". $ns1->getHasil();

?>