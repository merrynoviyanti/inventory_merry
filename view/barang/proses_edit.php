<?php 
$id = $_POST['Id_barang'];
$nama_barang = $_POST ['Nama_barang'];
$id_jenis = $_POST ['Id_jenis'];
$harga = $_POST ['Harga'];
$stok = $_POST ['Stok'];

include '../../config/koneksi.php';

$query = mysqli_query($conn, "UPDATE barang SET
Nama_barang='$nama_barang',
Id_jenis= '$id_jenis',
Harga = '$harga',
Stok = '$stok'
WHERE Id_barang = '$id'");

//JS
if ($query) {
    echo "<script>alert('Data berhasil diedit');</script>";
    echo "<script>window.location.href='index.php';</script>;";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
    echo "<script>window.location.href='view_tambah.php';</script>";
}
?>