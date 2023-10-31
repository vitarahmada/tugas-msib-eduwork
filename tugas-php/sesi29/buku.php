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
    <h2 style="text-align: center;">DATA BUKU</h2>
    <br>
    <table class="table table-dark table-hover">
        <tr>
            <th>ISBN</th>
            <th>Judul</th>
            <th>Tahun</th>
            <th>ID_Penerbit</th>
            <th>ID_Pengarang</th>
            <th>ID_Katalog</th>
            <th>Jumlah Stok</th>
            <th>Harga Pinjam</th>
        </tr>
        <?php
            include "connection.php";
            
            $books = mysqli_query($conn, "SELECT * FROM buku");

            foreach ($books as $key => $book) {
        ?>
            <tr>
                <td><?php echo $book["isbn"]; ?></td>
                <td><?php echo $book["judul"]; ?></td>
                <td><?php echo $book["tahun"]; ?></td>
                <td><?php echo $book["id_penerbit"]; ?></td>
                <td><?php echo $book["id_pengarang"]; ?></td>
                <td><?php echo $book["id_katalog"]; ?></td>
                <td><?php echo $book["qty_stok"]; ?></td>
                <td><?php echo $book["harga_pinjam"]; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>