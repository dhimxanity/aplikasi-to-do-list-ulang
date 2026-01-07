<?php
// Memanggil koneksi database
include "../config/database.php";

// Mengambil semua data tugas
$query = "SELECT * FROM tasks ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi To-Do List</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<h2>Aplikasi To-Do List</h2>

<!-- Form tambah tugas -->
<form action="add.php" method="POST">
    <input type="text" name="title" placeholder="Masukkan tugas" required>
    <button type="submit">Tambah</button>
</form>

<!-- Daftar tugas -->
<ul>
<?php while ($row = mysqli_fetch_assoc($result)): ?>
    <li class="<?= $row['status'] ? 'done' : '' ?>">
        <?= htmlspecialchars($row['title']) ?>

        <!-- Tombol ubah status -->
        <a href="update.php?id=<?= $row['id'] ?>">✔</a>

        <!-- Tombol hapus -->
        <a href="delete.php?id=<?= $row['id'] ?>">✖</a>
    </li>
<?php endwhile; ?>
</ul>

</body>
</html>
