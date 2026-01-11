<?php
include "../config/database.php";

// Mengambil ID dari URL
$id = $_GET['id'];

// Mengubah status menjadi selesai (1)
$query = "UPDATE tasks SET status = 1 WHERE id = $id";
mysqli_query($conn, $query);

// Kembali ke halaman utama
header("Location: index.php");
exit;
?>
