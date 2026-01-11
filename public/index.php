<?php
include "../config/database.php";

// Ambil semua tugas dari database
$query = "SELECT * FROM tasks ORDER BY id DESC";
$result = mysqli_query($conn, $query);

if ($result === false) {
    die("Query gagal: " . mysqli_error($conn));
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Aplikasi To-Do List</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="project-container">
    <h2>Aplikasi To-Do List</h2>

    <!-- Form tambah tugas -->
    <form action="add.php" method="POST" class="task-form">
        <input type="text" name="title" placeholder="Masukkan tugas baru" required>
        <button type="submit">Tambah</button>
    </form>

    <!-- Daftar semua tugas -->
    <ul class="task-list">
        <?php if (mysqli_num_rows($result) > 0): ?>
            <?php while ($task = mysqli_fetch_assoc($result)): ?>
                <li class="task-item <?= $task['status'] ? 'done' : '' ?>">
                    <div class="task-title"><?= htmlspecialchars($task['title']) ?></div>
                    <div class="task-meta">
                        <span class="task-date">
                            <?= isset($task['created_at']) ? date('M d', strtotime($task['created_at'])) : '—' ?>
                        </span>
                        <span class="task-status <?= $task['status'] ? 'beta' : 'planning' ?>">
                            <?= $task['status'] ? 'Selesai' : 'Belum' ?>
                        </span>
                        <a href="update.php?id=<?= (int)$task['id'] ?>" class="btn-check">✔</a>
                        <a href="delete.php?id=<?= (int)$task['id'] ?>" class="btn-delete">✖</a>
                    </div>
                </li>
            <?php endwhile; ?>
        <?php else: ?>
            <li class="task-item"><span class="task-title">Belum ada tugas.</span></li>
        <?php endif; ?>
    </ul>
</div>
</body>
</html>
