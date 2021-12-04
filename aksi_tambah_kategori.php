<?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
    $name = $_REQUEST['kategori'];
}
$sql = "INSERT INTO tabel_kategori (name) VALUES ('$name')";
$result = $connection->query($sql);

if ($result) {
    header('Location:kategori.php?pesan=berhasil_memasukkan_data');
}
