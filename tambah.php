<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['tugas'][] = [
        'nama' => $_POST['nama'],
        'waktu' => $_POST['waktu']
    ];
    header('Location: index.php');
    exit;
}
?>
<form method="POST">
    Nama Tugas: <input name="nama"><br>
    Waktu (jam): <input name="waktu" type="number"><br>
    <button type="submit">Simpan</button>
</form>
