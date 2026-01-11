<?php
// Menyimpan konfigurasi database
$host = "localhost";
$user = "root";
$pass = "";
$db   = "todo2_db";

// Membuat koneksi ke database
$conn = mysqli_connect($host, $user, $pass, $db);

// Mengecek apakah koneksi berhasil
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>