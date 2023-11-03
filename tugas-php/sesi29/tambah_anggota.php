<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col md-6">
                <h3>Tambah Data Anggota</h3>
                <form action="proses_tambah_anggota.php" method="post">
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td>
                                <input type="text" name="nama" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td>
                                <input type="text" name="username" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>
                                <input type="password" name="password" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" class="form-control">
                                    <label class="form-check-label">
                                        L
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" class="form-control">
                                    <label class="form-check-label">
                                        P
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Telp</td>
                            <td>
                                <input type="number" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>
                                <textarea name="alamat" cols="30" rows="3" class="form-control"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>
                                <input type="email" name="email" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Role</td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="role" class="form-control">
                                    <label class="form-check-label">
                                        ADMIN
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="role" class="form-control">
                                    <label class="form-check-label">
                                        USER
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" value="tambah">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>

</html>