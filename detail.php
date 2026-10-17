<?php
if ( !isset($_GET["nim"]) ||
    !isset($_GET["nama"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["nilai"]) ||
    !isset($_GET["grade"]) ||
    !isset($_GET["status"])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
<style>
html { background-color: #eef2fb; }
body { font-family: "Times New Roman", Times, serif; max-width: 520px; margin: 40px auto; padding: 28px 32px; background-color: white; border-radius: 14px; }
li { margin-bottom: 8px; }
a { display: inline-block; background-color: #0d4eea; color: white; padding: 9px 16px; border-radius: 6px; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>
<h3>Detail Mahasiswa</h3>
<ul>
    <li>NIM : <?= $_GET["nim"] ?></li>
    <li>Nama : <?= $_GET["nama"] ?></li>
    <li>Jurusan : <?= $_GET["jurusan"] ?></li>
    <li>Email : <?= $_GET["email"] ?></li>
    <li>Nilai : <?= $_GET["nilai"] ?></li>
    <li>Grade : <?= $_GET["grade"] ?></li>
    <li>Status : <?= $_GET["status"] ?></li>
</ul>
<a href="index.php">Kembali</a>
</body>
</html>
