<?

    include "connection.php";
    $id_anggota = $_GET['id_anggota'];

    mysqli_query($conn, "DELETE FROM anggota WHERE id_anggota = '$id_anggota' ");

    header("Location:index.php");

?>