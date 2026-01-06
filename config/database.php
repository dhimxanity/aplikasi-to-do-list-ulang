<?php
// Menyimpan konfigurasi database
$host = "localhost";
$user = "root";
$pass = "";
$db   = "todo_db";

// Membuat koneksi ke database
$conn = mysqli_conne
ct($host, $user, $pass, $db);

// Mengecek apakah koneksi berhasil
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>