<?php
require 'koneksi.php';
$id = $_REQUEST['id'];
$eskrim_id = $_REQUEST['eskrim_id'];
$name_id = $_REQUEST['name_id'];
$jumlah = $_REQUEST['jumlah'];
$sql = $connection->query("UPDATE tabel_penjualan SET eskrim_id='$eskrim_id', name_id='$name_id', jumlah='$jumlah'  WHERE id=$id
");

header('Location:data_penjualan.php');