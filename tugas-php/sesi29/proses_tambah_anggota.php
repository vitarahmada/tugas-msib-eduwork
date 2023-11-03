<?php
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sex = $_POST['gender'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];
    $email = $_POST['tgl_entry'];
    $role = $_POST['role'];

    include "connection.php";

    mysqli_query($conn, "INSERT INTO `anggota` (`nama`, `username`, `password`, `sex`, `telp`, `alamat`, `tgl_entry`, `role`) VALUES ('$nama', '$username', '$password', '$sex', '$telp', '$alamat', '$tgl_entry', '$role');");
    header("Location: index.php");
?>