<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "==============================================<br>";
        echo "MENGHITUNG 5 MACAM LUAS JENIS BANGUN DATAR<br>";
        echo "==============================================<br><br>";
        
        // 1
        echo "1. Persegi<br>";
        $sisi_persegi = 10;
        $luas_persegi = $sisi_persegi*$sisi_persegi;
        echo " Sisi = " . $sisi_persegi . "<br>";
        echo "Luas = " . $luas_persegi . "<br><br>";

        // 2
        echo "2. Persegi Panjang<br>";
        $p_persegipanjang = 30;
        $l_persegipanjang = 10;
        $luas_persegipanjang = $p_persegipanjang*$l_persegipanjang;
        echo "Panjang = " . $p_persegipanjang . "<br>";
        echo "Lebar = " . $l_persegipanjang . "<br>";
        echo "Luas = " . $luas_persegipanjang . "<br><br>";

        // 3
        echo "3. Segitiga<br>";
        $alas_segitiga = 20;
        $tinggi_segitiga = 25;
        $luas_segitiga = 0.5*$alas_segitiga*$tinggi_segitiga;
        echo "Alas = " . $alas_segitiga . "<br>";
        echo "Tinggi = " . $tinggi_segitiga . "<br>";
        echo "Luas = " . $luas_segitiga . "<br><br>";

        // 4
        echo "4. Trapesium<br>";
        $a = 20;
        $b = 40;
        $tinggi_trapesium = 20;
        $luas_trapesium = 0.5*($a+$b)*$tinggi_trapesium;
        echo "a = " . $a . "<br>";
        echo "b = " . $b . "<br>";
        echo "Tinggi = " . $tinggi_trapesium . "<br>";
        echo "Luas = " . $luas_trapesium . "<br><br>";

        // 5
        echo "5. Jajar Genjang<br>";
        $a_jajargenjang = 30;
        $tinggi_jajargenjang = 15;
        $luas_jajargenjang = $a_jajargenjang*$tinggi_jajargenjang;
        echo "Alas = " . $a_jajargenjang . "<br>";
        echo "Tinggi = " . $tinggi_jajargenjang . "<br>";
        echo "Luas = " . $luas_jajargenjang . "<br><br>";
    ?>
</body>
</html>