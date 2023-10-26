<?php
    include "connection.php";
    $query = mysqli_query($conn, "SELECT * FROM anggota ORDER BY nama ASC")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESI 29</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <br>
    <h2 style="text-align: center;">DATA ANGGOTA PERPUSTAKAAN</h2>
    <br>
    <table class="table table-dark table-hover">
        <tr>
            <th>No</th>
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
            if (mysqli_num_rows($query)>0) {
        ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["nama"]; ?></td>
            <td><?php echo $data["username"]; ?></td>
            <td><?php echo $data["password"]; ?></td>
            <td><?php echo $data["sex"]; ?></td>
            <td><?php echo $data["telp"]; ?></td>
            <td><?php echo $data["alamat"]; ?></td>
            <td><?php echo $data["email"]; ?></td>
            <td><?php echo $data["role"]; ?></td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</body>

</html>