<?php
    // 1
    for ($i = 1; $i <= 10; $i++) {
        $hasil = $i * 1;
        echo "1 x " . $i . " = " . $hasil . "<br>";
    }

    echo "<br><br>";

    // 2
    // membuat perulangan untuk jumlah baris dimana jumlah baris = 9
    for ($i=9; $i>=1; $i--) {
        // membuat perulangan untuk jumlah kolom dimulai dengan jumlah kolom = 9
        for ($k=1; $k<=$i; $k++) {
            // mencetak hasil perulangan dengan *
            echo "*";
        }
        // mencetak baris baru setiap ganti baris
        echo "<br>";
    }

    echo "<br><br>";

    // 3
    // membuat perulangan untuk jumlah baris dimana jumlah baris = 9
    for ($a=0; $a<9; $a++) {
        // membuat perulangan untuk jumlah kolom dimulai dengan jumlah kolom = 1
        for ($b=0; $b<=$a; $b++) {
            // mencetak hasil perulangan dengan variabel $b
            echo "$b";
        }
        // mencetak baris baru setiap ganti baris
        echo "<br>";
    }
?>