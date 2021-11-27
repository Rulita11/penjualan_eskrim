<?php
require 'koneksi.php';
$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$sql = $connection->query("UPDATE tabel_kategori SET name='$name' WHERE id=$id");

header('Location:kategori.php');
