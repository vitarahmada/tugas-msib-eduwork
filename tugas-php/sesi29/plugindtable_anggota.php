<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <title>SESI 29</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="navbar mt-2 d-flex justify-content-evenly navbar-light bg-dark mb-4">
            <a class="nav-link" href="index.php">ANGGOTA</a>
            <a class="nav-link" href="peminjaman.php">PEMINJAMAN</a>
            <a class="nav-link" href="detailPeminjaman.php">DETAIL PEMINJAMAN</a>
            <a class="nav-link" href="plugindtable_anggota.php">PLUGIN DATATABLE</a>
        </div>
        <h2 style="text-align: center;">DATA ANGGOTA PERPUSTAKAAN</h2>
        <div class="button d-flex justify-content-center mb-4 mt-3">
            <a href="tambah_anggota.php">Tambah Data</a>
        </div>
        <table id="data" class="display">
            <thead>
                <tr>
                    <td>Nama</td>
                    <td>Username</td>
                    <td>Password</td>
                    <td>Gender</td>
                    <td>Telp</td>
                    <td>Alamat</td>
                    <td>Email</td>
                    <td>Tanggal Entry</td>
                    <td>Role</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>
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
            </tbody>
            <?php
            ?>
        </table>
    </div>
</body>

</html>

<script type="text/javascript">
    $(document).ready(function() {
        $('#data').DataTable();
    });
</script>