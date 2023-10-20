<!DOCTYPE html>
<html lang="en">

<head>
    <title>sesi27.php</title>
</head>

<body>
    <?php
    // 1
    for ($a = 0; $a <= 9; $a++) {
        for ($b = 0; $b < $a; $b++) {
            echo "$b";
        }
        echo "<br>";
    }
    ?>
    <br><br>
    

    <!-- 2 -->
    <table border="1" style="border-collapse: collapse;">
        <tr style="background-color:lightblue;">
            <td>No</td>
            <td>Nama</td>
            <td>Kelas</td>
        </tr>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            if ($i % 2 == 0) {
                echo "<tr>";
            } else {
                echo "<tr style='background-color:lightgray;'>";
            }
            echo "<td>$i";
            echo "<td>Baris ke-$i";
            $kelas=11;
            echo "<td>Kelas ", $kelas-$i;
            echo "</tr>";
        }
        ?>
    </table>

</body>

</html>