<?php
require 'koneksi.php';
$usr = $_POST['username'];
$pwd = $_POST['password'];

$sql = $connection->query("SELECT * FROM tabel_user WHERE username='$usr'");
$data = mysqli_fetch_assoc($sql);

if ($sql) {
    if ($data['username'] === $usr && $data['password'] === $pwd) {
        session_start();
        $_SESSION['username'] = $data['username'];
        $_SESSION['level'] = $data['level'];
        header('Location:database_sales.php?login=berhasil');
    } else {
        $_SESSION['error_1'] = 'Username yamg dimasukkan tidak sesuai!';
        header('Location:login.php');
    }
} else {
    $_SESSION['error_2'] = 'Password yamg dimasukkan tidak sesuai!';
    header('Location:login.php');
}
