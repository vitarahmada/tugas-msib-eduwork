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
        <h2 style="text-align: center;">DATA DETAIL PEMINJAMAN</h2>
        <div class="button d-flex justify-content-center mb-4 mt-3">
            <a href="tambah_detailPeminjaman.php">Tambah Data</a>
        </div>
        <table class="table table-dark table-hover">
            <tr>
                <th>ISBN</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
            <?php
            include "connection.php";

            $books = mysqli_query($conn, "SELECT * FROM detail_peminjaman");

            foreach ($books as $key => $book) {
            ?>
                <tr>
                    <td><?php echo $book["isbn"]; ?></td>
                    <td><?php echo $book["qty"]; ?></td>
                    <td>
                        <a href="edit_detailPeminjaman.php" class="btn btn-warning btn-sm">Edit</a>
                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>