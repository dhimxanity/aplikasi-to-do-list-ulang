<?php
session_start();

// Inisialisasi array todo jika belum ada
if (!isset($_SESSION['todo'])) {
    $_SESSION['todo'] = [];
}

// Menambah data todo
if (isset($_POST['tambah'])) {
    $kegiatan = trim($_POST['kegiatan']);
    if ($kegiatan != "") {
        $_SESSION['todo'][] = $kegiatan;
    }
}

// Menghapus data todo
if (isset($_GET['hapus'])) {
    $index = $_GET['hapus'];
    unset($_SESSION['todo'][$index]);
    $_SESSION['todo'] = array_values($_SESSION['todo']);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>To Do List</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f4f4;
        }
        .container {
            width: 400px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
        }
        input[type=text] {
            width: 70%;
            padding: 5px;
        }
        button {
            padding: 6px 10px;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            margin: 8px 0;
        }
        a {
            color: red;
            text-decoration: none;
            margin-left: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>📋 To Do List</h2>

    <form method="POST">
        <input type="text" name="kegiatan" placeholder="Masukkan kegiatan">
        <button type="submit" name="tambah">Tambah</button>
    </form>

    <ul>
        <?php foreach ($_SESSION['todo'] as $i => $todo): ?>
            <li>
                <?= htmlspecialchars($todo) ?>
                <a href="?hapus=<?= $i ?>">Hapus</a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

</body>
</html>
