<?php 
$id = $_POST['Id_barang'];
$nama_barang = $_POST ['Nama_barang'];
$id_jenis = $_POST ['Id_jenis'];
$harga = $_POST ['Harga'];
$stok = $_POST ['Stok'];

include '../../config/koneksi.php';

$query = mysqli_query($conn, "INSERT INTO barang VALUES(
'$id',
'$nama_barang',
'$id_jenis',
'$harga',
'$stok')");

//JS
if ($query) {
    echo "<script>alert('Data berhasil disimpan');</script>";
    echo "<script>window.location.href='index.php';</script>;";
} else {
    echo "<script>alert('Data gagal disimpan');</script>";
    echo "<script>window.location.href='view_tambah.php';</script>";
}
?>