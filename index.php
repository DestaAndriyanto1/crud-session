<?php
session_start();
if (!isset($_SESSION['tugas'])) {
    $_SESSION['tugas'] = [];
}
?>
<h2>Daftar Tugas</h2>
<ol>
<?php foreach ($_SESSION['tugas'] as $index => $tugas): ?>
    <li>
        <?= htmlspecialchars($tugas['nama']) ?> - <?= htmlspecialchars($tugas['waktu']) ?> jam
        | <a href="detail.php?id=<?= $index ?>">Detail</a>
        | <a href="edit.php?id=<?= $index ?>">Edit</a>
        | <a href="hapus.php?id=<?= $index ?>">Hapus</a>
    </li>
<?php endforeach; ?>
</ol>
<a href="tambah.php">Tambah Tugas</a>
