<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESI 29</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <center>
        <a href="index.php">Anggota</a>
        <a href="peminjaman.php">Peminjaman</a>
        <a href="buku.php">Buku</a>
    </center>

    <br>
    <h2 style="text-align: center;">DATA PEMINJAMAN</h2>
    <br>
    <table class="table table-dark table-hover">
        <tr>
            <th>ID Anggota</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
        </tr>
        <?php
            include "connection.php";
            
            $pinjam = mysqli_query($conn, "SELECT * FROM peminjaman");

            foreach ($pinjam as $key => $pinjamm) {
        ?>
            <tr>
                <td><?php echo $pinjamm["id_anggota"]; ?></td>
                <td><?php echo $pinjamm["tgl_pinjam"]; ?></td>
                <td><?php echo $pinjamm["tgl_kembali"]; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>