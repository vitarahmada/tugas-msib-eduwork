<?php

    // 1
    for ($a=1; $a<=10; $a++) {
        if ($a % 2 == 0) {
            echo "Angka $a merupakan bilangan genap";
        } else {
            echo "Angka $a merupakan bilangan ganjil";
        }
        echo "<br>";
    }

    echo "<br>";
    echo "<br>";

    // 2
    for ($b=2000; $b<=2023; $b++) {
        if ($b % 4 == 0 || $b % 400 == 0) {
            echo "$b merupakan tahun kabisat";
        } else {
            echo "$b bukan merupakan tahun kabisat";
        }
        echo "<br>";
    }

    echo "<br>";
    echo "<br>";

    // 3
    for ($i=9; $i>=1; $i--) {
        for ($j=1; $j<=$i; $j++) {
            echo "$j";
        }
        echo "<br>";
    }

?>