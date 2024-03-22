<?php

$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];

//buat total nilai
//dari nilai_uts+nilai_uas+nilai_tugas/3

$total_nilai = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;

//buat perhitungan IF untuk mencari predikat

//buat perhitungan untuk mecari status LULUS/GAGAL

// cetak hasil

echo 'nama:'. $nama . '<br>';
echo 'matkul:'. $matkul . '<br>';
echo $nilai_uts;
echo $nilai_uas;
echo $nilai_tugas;

//totatl nilai

echo $total_nilai;

?>