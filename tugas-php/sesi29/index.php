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
            <a class="nav-link" href="detailPeminjaman.php">DETAIL PEMINJAMAN</a>
        </div>
        <h2 style="text-align: center;">DATA ANGGOTA PERPUSTAKAAN</h2>
        <div class="button d-flex justify-content-center mb-4 mt-3">
            <a href="tambah_anggota.php">Tambah Data</a>
        </div>
        <table class="table table-dark table-hover">
            <tr>
                <th>Nama</th>
                <th>Username</th>
                <th>Password</th>
                <th>Gender</th>
                <th>Telp</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Tanggal Entry</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
            <?php
            include "connection.php";

            $anggota = mysqli_query($conn, "SELECT * FROM anggota ORDER BY nama ASC");

            foreach ($anggota as $key => $anggotaa) {
            ?>
                <tr>
                    <td><?php echo $anggotaa["nama"]; ?></td>
                    <td><?php echo $anggotaa["username"]; ?></td>
                    <td><?php echo $anggotaa["password"]; ?></td>
                    <td><?php echo $anggotaa["sex"]; ?></td>
                    <td><?php echo $anggotaa["telp"]; ?></td>
                    <td><?php echo $anggotaa["alamat"]; ?></td>
                    <td><?php echo $anggotaa["email"]; ?></td>
                    <td><?php echo date("d/m/Y", strtotime($anggotaa["tgl_entry"])); ?></td>
                    <td><?php echo $anggotaa["role"]; ?></td>
                    <td>
                        <a href="edit_anggota.php?id_anggota=<?php echo $anggotaa["id_anggota"] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete_anggota.php?id_anggota=<?php echo $anggotaa["id_anggota"] ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>

</body>

</html>