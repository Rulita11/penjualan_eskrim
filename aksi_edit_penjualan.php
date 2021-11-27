<?php
require 'koneksi.php';
$id = $_REQUEST['id'];
$mobil_id = $_REQUEST['mobil_id'];
$sales_id = $_REQUEST['sales_id'];
$jumlah = $_REQUEST['jumlah'];
$sql = $connection->query("UPDATE tabel_penjualan SET mobil_id='$mobil_id', sales_id='$sales_id', jumlah='$jumlah'  WHERE id=$id
");

header('Location:data_penjualan.php');