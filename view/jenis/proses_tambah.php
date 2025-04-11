<?php 
$id=$_POST['Id_jenis'];
$nama_jenis=$_POST ['Nama_jenis'];

include '../../config/koneksi.php';

$query = mysqli_query($conn, "INSERT INTO jenis VALUES('$id','$nama_jenis')");

//JS
if ($query) {
    echo "<script>alert('Data berhasil disimpan');</script>";
    echo "<script>window.location.href='index.php';</script>;";
} else {
    echo "<script>alert('Data gagal disimpan');</script>";
    echo "<script>window.location.href='view_tambah.php';</script>";
}
?>