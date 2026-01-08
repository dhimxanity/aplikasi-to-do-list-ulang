<?php
include "../config/database.php";

// Mengambil data dari form
$title = $_POST['title'];

// Query menambahkan tugas baru
$query = "INSERT INTO tasks (title) VALUES ('$title')";
mysqli_query($conn, $query);

// Kembali ke halaman utama
header("Location: index.php");
exit;
?>
