<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'uaspemrogweb';
$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die('Koneksi Gagal');
}

$success = "";
$error = "";
$username = "";
$password = "";
$confirmpassword = "";

$nama_lengkap = "";
$no_telepon = "";
$layanan = "";
$cabang = "";
$waktu_reservasi = "";
?>