<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // latihan studi kasus 1
        $data = array(
            array("Pelita", 23, "Laravel"),
            array("Najmina", 20, "Node JS"),
            array("Fahmi", 26, "Digital Marketing"),
            array("Anisa", 21, "UI/UX Designer"),
            array("Nasa", 23, "Graphic Designer")
        );

        echo "Nama : ".$data[0][0].", Umur : ".$data[0][1]." tahun, Kelas : ".$data[0][2].".<br>";
        echo "Nama : ".$data[1][0].", Umur : ".$data[1][1]." tahun, Kelas : ".$data[1][2].".<br>";
        echo "Nama : ".$data[2][0].", Umur : ".$data[2][1]." tahun, Kelas : ".$data[2][2].".<br>";
        echo "Nama : ".$data[3][0].", Umur : ".$data[3][1]." tahun, Kelas : ".$data[3][2].".<br>";
        echo "Nama : ".$data[4][0].", Umur : ".$data[4][1]." tahun, Kelas : ".$data[4][2].".<br>";

        echo "<br>=====================<br><br>";

        // latihan studi kasus 2
        $members = array("Pelita", "Najmina", "Anita", "Bayu", "Nasa", "Rahma");
        
        foreach ($members as $member) {
            echo "Nama : ".$member."<br>";
        }
    ?>
</body>
</html>