<?php
//function define by user

//fungsi yang tidak mengembalikan nilai
function salam(){
    echo "Assalamulaikum...apa kabar";
}
salam();//cetak

echo "<br>";//batas

function panggil($arg){
    echo "halo apa kabar sayang";
}
panggil("arman");//cetak

echo "<br>";//batas

//fungsi yang mengembalikan nilai
function hasil($a,$b){
    $c=$a*$b;
    return $c;
}
echo hasil(5,2);

echo "<br>";//batas

//buat fungsi hihtung umur
function umur($thn_lahir){
    $thn_sekarang = 2024;
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
echo umur(2005)

?>