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
    <h2 style="text-align: center;">DATA ANGGOTA PERPUSTAKAAN</h2>
    <br>
    <a href="tambah_anggota.php">Tambah Data</a><br><br>
    <table class="table table-dark table-hover">
        <tr>
            <th>Nama</th>
            <th>Username</th>
            <th>Password</th>
            <th>Gender</th>
            <th>Telp</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Role</th>
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
                <td><?php echo $anggotaa["role"]; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>