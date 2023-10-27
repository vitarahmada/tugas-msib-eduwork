<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "=============================================<br>";
        echo "MENGHITUNG 5 MACAM VOLUME BANGUN RUANG<br>";
        echo "=============================================<br><br>";

        // 1
        echo "1. Kubus<br>";
        $rusuk = 20;
        $vol_kubus = $rusuk*$rusuk*$rusuk;
        echo "Volume = " . $vol_kubus . "<br><br>";

        // 2
        echo "2. Balok<br>";
        $panjang = 30;
        $lebar = 10;
        $tinggi = 10;
        $vol_balok = $panjang*$lebar*$tinggi;
        echo "Panjang = " . $panjang . "<br>";
        echo "Lebar = " . $lebar . "<br>";
        echo "Tinggi = " . $tinggi . "<br>";
        echo "Volume = " . $vol_balok . "<br><br>";

        // 3
        echo "3. Prisma Segitiga<br>";
        $a_prisma = 15;
        $t_alasprisma = 20;
        $t_prisma = 35;
        $vol_prisma = 0.5*$a_prisma*$t_alasprisma*$t_prisma;
        echo "Alas Prisma = " . $a_prisma . "<br>";
        echo "Tinggi Alas Prisma = " . $t_alasprisma . "<br>";
        echo "Tinggi Prisma = " . $t_prisma . "<br>"; 
        echo "Volume = " . $vol_prisma . "<br><br>";
    ?>
</body>
</html>