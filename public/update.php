<?php
include "../config/database.php";

// Ambil ID dari URL
$id = $_GET['id'];

// Ambil status sekarang
$query = "SELECT status FROM tasks WHERE id = $id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

// Toggle status: jika 0 jadi 1, jika 1 jadi 0
$newStatus = $row['status'] ? 0 : 1;

// Update status di database
$update = "UPDATE tasks SET status = $newStatus WHERE id = $id";
mysqli_query($conn, $update);

// Kembali ke halaman utama
header("Location: index.php");
exit;
?>
