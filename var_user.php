<?php 
// definisikan variables
$nama = 'Rosalie Naurah';
$umur = 13;
$berat = 22.4;

echo '<br>';
echo 'Nama : ' . $nama;
echo '<br/>Umur : ' . $umur.' Tahun';
echo '<br/>Berat : '.$berat.' Kg';

echo "<br/>Hello $nama Apakabar";

echo '<hr>';
// variable system
echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
echo '<br/>Nama File '.$_SERVER["PHP_SELF"];

echo '<hr>';
// definisikan varieble konstanta
// definisikan untuk memanggil varieble konstanta
define('PELAJARAN', 'PemWeb');

echo PELAJARAN;
?>
