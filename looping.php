<?php
// looping dengan for 
//pengulangan angka dari 1 - 10
for($x=1; $x<=10; $x=$x+1){
    echo " <br> $x";
}

//pengulangan angka dari 10 - 1
for($y=10; $y>=1; $y=$y-1){
    echo " <br> $y";
}

?>

<form action="">
    Jumlah masa aksi:
    <?php
    for($masa=1; $masa<=10; $masa=$masa+1){
        echo "<input type='radio' name='jml_masa' value='$masa'>". $masa;
    }
    ?>
</form>