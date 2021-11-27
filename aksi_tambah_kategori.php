<?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
    $nama = $_REQUEST['nama_sales'];
    $telepon = $_REQUEST['telepon'];
    $alamat = $_REQUEST['alamat'];
}
$sql = "INSERT INTO tabel_sales (nama_sales, telepon, alamat) VALUES ('$nama', '$telepon', '$alamat')";
$result = $connection->query($sql);

if ($result) {
    header('Location:data_sales.php?pesan=berhasil_memasukkan_data');
}
