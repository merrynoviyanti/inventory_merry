<?php 
$id = $_GET['id'];
$nama_jenis = $_POST ['Nama_jenis'];

include '../../config/koneksi.php';

$query = mysqli_query($conn, "UPDATE jenis SET
Nama_jenis='$nama_jenis'
WHERE Id_jenis='$id'");

//JS
if ($query) {
    echo "<script>alert('Data berhasil diedit');</script>";
    echo "<script>window.location.href='index.php';</script>;";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
    echo "<script>window.location.href='view_tambah.php';</script>";
}
?>