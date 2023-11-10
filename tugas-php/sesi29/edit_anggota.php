<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<?php

    include "connection.php";
    $id_anggota = $_GET['id_anggota'];

    $anggota = mysqli_query($conn, "SELECT * FROM anggota WHERE id_anggota = '$id_anggota' ");

    foreach ($anggota as $anggotaa) {
        $nama = $anggotaa['nama'];
        $username = $anggotaa['username'];
        $password = $anggotaa['password'];
        $sex = $anggotaa['sex'];
        $telp = $anggotaa['telp'];
        $alamat = $anggotaa['alamat'];
        $email = $anggotaa['email'];
        $tgl_entry = $anggotaa['tgl_entry'];
        $role = $anggotaa['role'];
    }

    // echo $anggotaa['nama'] . "<br>";
    // echo $anggotaa['username'] . "<br>";
    // echo $anggotaa['password'] . "<br>";
    // echo $anggotaa['sex'] . "<br>";
    // echo $anggotaa['telp'] . "<br>";
    // echo $anggotaa['alamat'] . "<br>";
    // echo $anggotaa['email'] . "<br>";
    // echo $anggotaa['tgl_entry'] . "<br>";
    // echo $anggotaa['role'] . "<br>";
?>

<body>
    <div class="container d-flex justify-content-center mt-4">
        <div class="row">
            <div class="col md-6">
                <h3 class="d-flex justify-content-center mb-4">Edit Data Anggota</h3>
                <form action="proses_edit_anggota.php?id_anggota=<?php echo $id_anggota; ?>" method="post">
                    <table class="table">
                        <tr>
                            <td>Nama</td>
                            <td>
                                <input type="text" name="nama" class="form-control" value="<?php echo $nama; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td>
                                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>
                                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sex" class="form-control" value="L">
                                    <label class="form-check-label">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sex" class="form-control" value="P">
                                    <label class="form-check-label">
                                        Perempuan
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Telp</td>
                            <td>
                                <input type="number" name="telp" class="form-control" value="<?php echo $telp; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>
                                <textarea name="alamat" cols="30" rows="3" class="form-control"><?php echo $alamat; ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>
                                <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Tanggal Entry</td>
                            <td>
                                <input type="date" name="tgl_entry" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Role</td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="role" class="form-control" value="ADMIN">
                                    <label class="form-check-label">
                                        ADMIN
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="role" class="form-control" value="USER">
                                    <label class="form-check-label">
                                        USER
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="Submit" value="submit" class="btn btn-primary">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>

</html>