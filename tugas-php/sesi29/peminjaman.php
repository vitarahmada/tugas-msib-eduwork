<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESI 29</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="navbar mt-2 d-flex justify-content-evenly navbar-light bg-dark mb-4">
            <a class="nav-link" href="index.php">ANGGOTA</a>
            <a class="nav-link" href="peminjaman.php">PEMINJAMAN</a>
            <a class="nav-link" href="buku.php">BUKU</a>
        </div>
        <h2 style="text-align: center;">DATA PEMINJAMAN</h2>
        <div class="button d-flex justify-content-evenly mb-4 mt-3">
            <a href="tambah_anggota.php">Tambah Data</a>
            <a href="#">Edit Data</a>
        </div>
        <table class="table table-dark table-hover">
            <tr>
                <th>ID Anggota</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
            </tr>
            <?php
            include "connection.php";

            $pinjam = mysqli_query($conn, "SELECT * FROM peminjaman JOIN anggota ON peminjaman.id_anggota_fk = anggota.id_anggota");

            foreach ($pinjam as $key => $pinjamm) {
            ?>
                <tr>
                    <td><?php echo $pinjamm["nama"]; ?></td>
                    <td><?php echo $pinjamm["tgl_pinjam"]; ?></td>
                    <td><?php echo $pinjamm["tgl_kembali"]; ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>