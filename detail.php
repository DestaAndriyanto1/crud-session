<?php
session_start();
$id = $_GET['id'];
$tugas = $_SESSION['tugas'][$id];
?>
<h2>Detail Tugas</h2>
<p>Nama: <?= htmlspecialchars($tugas['nama']) ?></p>
<p>Waktu: <?= htmlspecialchars($tugas['waktu']) ?> jam</p>
<a href="index.php">Kembali</a>
