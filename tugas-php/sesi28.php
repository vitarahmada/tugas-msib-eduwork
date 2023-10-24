<!DOCTYPE html>
<html lang="en">

<head>
    <title>sesi28.php</title>
    <style>
        body {
            margin: 0;
        }
        p {
            background-color: yellow;
            padding: 15px;
            font-size: 20px;
            margin-top: 0;
        }
        table {
            width: 50%;
            margin: auto;
            margin-top: 100px;
        }
        th {
            text-align: center;
            height: 40px;
        }
        td {
            text-align: left;
            padding-left: 10px;
            height: 40px;
        }
    </style>
</head>

<body>
    <p>Daftar Nilai</p>

    <table border="1" style="border-collapse: collapse;">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Kelas</th>
            <th>Nilai</th>
            <th>Hasil</th>
        </tr>
        <?php
        $data = file_get_contents("data.json");
        $students = json_decode($data);

        foreach ($students as $key => $student) {
            if ($key % 2 == 0) {
                echo "<tr style='background-color:lightgray;'>";
            } else {
                echo "<tr>";
            }
            echo "<td>" . $key + 1;
            echo "<td>" . $student->nama;

            $new_format_ttl = date("d F Y", strtotime($student->tanggal_lahir));
            echo "<td>" . $new_format_ttl;

            $tahun_skrg = date("Y");
            $tahun_lahir = date("Y", strtotime($student->tanggal_lahir));
            echo "<td>" . $tahun_skrg - $tahun_lahir . " tahun";

            echo "<td>" . $student->alamat;
            echo "<td>" . $student->kelas;
            echo "<td>" . $student->nilai;


            echo "<td>";
            if ($student->nilai >= 90 && $student->nilai <= 100) {
                echo "A";
            } else if ($student->nilai >= 80 && $student->nilai <= 89) {
                echo "B";
            } else if ($student->nilai >= 70 && $student->nilai <= 79) {
                echo "C";
            } else {
                echo "D";
            }
        }
        ?>
    </table>

</body>

</html>