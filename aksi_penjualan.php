<?php
require 'koneksi.php';
$eskrim_id = $_REQUEST['eskrim_id'];
$name_id = $_REQUEST['name_id'];
$jumlah = $_REQUEST['jumlah'];

$query = $connection->query("SELECT stok FROM tabel_eskrim WHERE id='$eskrim_id' ");
$data = mysqli_fetch_array($query);

if ($data['stok'] < $jumlah) {
    header('Location:data_barang.php');
} else {

    $connection->query("UPDATE tabel_eskrim SET stok = stok - $jumlah WHERE id='$eskrim_id' ");

    $sql = $connection->query("INSERT INTO tabel_penjualan (eskrim_id, name_id, jumlah) VALUES ('$eskrim_id', '$name_id', '$jumlah') ");
}

if ($sql) {
    header('Location:data_barang.php');
} 
