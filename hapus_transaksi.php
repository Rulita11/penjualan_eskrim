<?php
require 'koneksi.php';
$id = $_GET ['id'];
$connection->query("DELETE FROM tabel_penjualan WHERE id=($id)");

header('Location:data_penjualan.php');
?>