<?php
    // echo $_POST['nama'] . "<br>";
    // echo $_POST['username'] . "<br>";
    // echo $_POST['password'] . "<br>";
    // echo $_POST['sex'] . "<br>";
    // echo $_POST['telp'] . "<br>";
    // echo $_POST['alamat'] . "<br>";
    // echo $_POST['email'] . "<br>";
    // echo $_POST['tgl_entry'] . "<br>";
    // echo $_POST['role'] . "<br>";

    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sex = $_POST['sex'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $tgl_entry = $_POST['tgl_entry'];
    $role = $_POST['role'];

    include "connection.php";

    mysqli_query($conn, "INSERT INTO `anggota` (`nama`, `username`, `password`, `sex`, `telp`, `alamat`, `email`, `tgl_entry`, `role`) VALUES ('$nama', '$username', '$password', '$sex', '$telp', '$alamat', '$email', '$tgl_entry', '$role');");
    
    header("Location:index.php");
