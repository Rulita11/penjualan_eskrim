<?php
require 'koneksi.php';
$id = $_GET ['id'];
$connection->query("DELETE FROM tabel_eskrim WHERE id=($id)");

header('Location:data_barang.php');
?>