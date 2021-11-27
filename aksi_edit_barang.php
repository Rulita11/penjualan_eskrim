<?php
require 'koneksi.php';
$id = $_REQUEST['id'];
$nama = $_REQUEST['nama_eskrim'];
$rasa = $_REQUEST['rasa_eskrim'];
$harga = $_REQUEST['harga'];
$stok = $_REQUEST['stok'];
$sql = $connection->query("UPDATE tabel_eskrim SET nama_eskrim='$nama', rasa_eskrim='$rasa', harga='$harga', stok='$stok'  WHERE id=$id
");

header('Location:data_barang.php');