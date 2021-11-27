<?php
require 'koneksi.php';
$id = $_GET ['id'];
$connection->query("DELETE FROM tabel_kategori WHERE id=($id)");

header('Location:kategori.php');
