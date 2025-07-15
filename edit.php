<?php
session_start();
$id = $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['tugas'][$id] = [
        'nama' => $_POST['nama'],
        'waktu' => $_POST['waktu']
    ];
    header('Location: detail.php?id=' . $id);
    exit;
}
$tugas = $_SESSION['tugas'][$id];
?>
<form method="POST">
    Nama Tugas: <input name="nama" value="<?= htmlspecialchars($tugas['nama']) ?>"><br>
    Waktu (jam): <input name="waktu" type="number" value="<?= htmlspecialchars($tugas['waktu']) ?>"><br>
    <button type="submit">Simpan</button>
</form>
