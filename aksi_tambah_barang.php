<?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
    $nama = $_REQUEST['nama_eskrim'];
    $rasa = $_REQUEST['rasa_eskrim'];
    $harga = $_REQUEST['harga'];
    $stok = $_REQUEST['stok'];
}
$sql = "INSERT INTO tabel_eskrim (nama_eskrim, rasa_eskrim, harga, stok) VALUES ('$nama', '$rasa', '$harga', '$stok')";
$result = $connection->query($sql);

if ($result) {
    header('Location:data_barang.php?pesan=berhasil_memasukkan_data');
}
