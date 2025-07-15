<?php
session_start();
$id = $_GET['id'];
unset($_SESSION['tugas'][$id]);
$_SESSION['tugas'] = array_values($_SESSION['tugas']);
header('Location: index.php');
