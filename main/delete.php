<?php
include "../config/database.php";

// Mengambil ID dari URL
$id = $_GET['id'];

// Menghapus tugas dari database
$query = "DELETE FROM tasks WHERE id = $id";
mysqli_query($conn, $query);

// Kembali ke halaman utama
header("Location: index.php");
exit;
?>
