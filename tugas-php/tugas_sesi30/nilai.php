<?php
    $nilai = 80;
    switch(true) {
        case ($nilai >= 90 && $nilai <=100):
            echo "Grade A";
            break;
        case ($nilai >= 80 && $nilai <90):
            echo "Grade B";
            break;
        case ($nilai >= 70 && $nilai <80):
            echo "Grade C";
            break;
        default:
            echo "Grade D";
            break;
    }
?>