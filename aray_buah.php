<?php
// array : disebut sekumpulan data 
// array numerik dan array asosiatif
// perulangan foreach

// 1. array numerik 
$sar_buah = array ('pepaya', 'pisang', 'mangga', 'jambu');
// cetak indeks ke?
echo $sar_buah[1];
echo '<br>';

// jumlah total buah
$jumlah = count($sar_buah);
echo $jumlah;
echo '<br>';

// lihat hasil sekumpulan data buah dngan forech
foreach ($sar_buah as $value) {
    echo $value. '<br>';
}
echo '<br>';
foreach ($sar_buah as $index => $value){
    echo "$index $value <br>";
}
// 2. array asosiatif
$sar_sisga = array (10=>'lulu')

?>