<?php

    // nomor 1
    $question1 = array("satu", "dua", "tiga", "empat", "lima");
    $reversed = array_reverse($question1);
    foreach ($reversed as $reversed1) {
        echo $reversed1 . "<br>";
    }

    echo "<br><br>";

    // nomor 2
    $question2 = array("apel", "nanas", "mangga", "jeruk");
    $count = count($question2);
    echo "Terdapat " . $count . " buah";

    echo "<br><br><br>";

    // nomor 3
    $question3 = [7, 3, 4, 9];
    $sum = array_sum($question3);
    echo "Totalnya adalah " . $sum;

    echo "<br><br><br>";

    // nomor 4
    for ($i = 1; $i <= 10; $i++) {
        $hasil = $i * 1;
        echo "1 x " . $i . " = " . $hasil . "<br>";
    }
?>