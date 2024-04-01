<?php
class PersegiPanjang {
    public $panjang, $lebar;
    
    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function rumusKeliling() {
        return 2 * ($this->panjang + $this->lebar);
    }

    public function rumusLuas() {
        return $this->panjang * $this->lebar;
    }    
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Persegi Panjang</title>
</head>
<body>
    <table style="border-style: solid; border-width:1px; margin-left: px" align="center">
    <h2>Form Persegi Panjang</h2>
    <form action="" method="post">
        Panjang: <input type="text" name="panjang"><br>
        Lebar: <input type="text" name="lebar"><br>
        <input type="submit" name="hitung" value="Hitung">
    </table>
    </form>
    <?php
    if(isset($_POST['hitung'])) {
        if(isset($_POST['panjang']) && isset($_POST['lebar'])) {
            $panjang = $_POST['panjang'];
            $lebar = $_POST['lebar'];

            // Membuat objek PersegiPanjang
            $persegiPanjang = new PersegiPanjang($panjang, $lebar);

            // Menghitung keliling dan luas
            $keliling = $persegiPanjang->rumusKeliling();
            $luas = $persegiPanjang->rumusLuas();

            // Menampilkan hasil
            echo "<p>Panjang: $panjang</p>";
            echo "<p>Lebar: $lebar</p>";
            echo "<p>Keliling: $keliling</p>";
            echo "<p>Luas: $luas</p>";
        } else {
            echo "Masukkan nilai panjang dan lebar terlebih dahulu!";
        }
    }
    ?>
</body>
</html>