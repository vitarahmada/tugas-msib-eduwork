<?php

    // 1. Membuat output bilangan ganjil dan genap
    $number = 10;
    
    if ($number % 2 == 0) {
        echo "$number merupakan bilangan genap";
    } else {
        echo "$number merupakan bilangan ganjil";
    }

    // 2. Membuat output tahun kabisat
    $year_input = 2023;

    if ($year_input % 4 == 0 || $year_input % 400 == 0) {
        echo "$year_input merupakan tahun kabisat";
    } else {
        echo "$year_input bukan merupakan tahun kabisat";
    }

    // 3. Membuat grade nilai
    $nilai = 69;

    if ($nilai >= 90 && $nilai <= 100) {
        echo "Grade A";
    } else if ($nilai >= 80 && $nilai <= 89) {
        echo "Grade B";
    } else if ($nilai >= 70 && $nilai <= 79) {
        echo "Grade C";
    } else if ($nilai >= 60 && $nilai <= 69) {
        echo "Grade D";
    } else {
        echo "Grade E";
    }
    
?>