<?php
if (!isset($_POST["nama"]) || !isset($_POST["kelas"]) || !isset($_POST["pesan"])) {
    header("Location: form_pesan.php");
    exit;
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pesan</title>
    <style> html { background-color: #eef2fb; }
        body { font-family: "Times New Roman", Times, serif; max-width: 520px; margin: 40px auto; padding: 28px 32px; background-color: white; border-radius: 14px; }
        li { margin-bottom: 8px; }
        a { display: inline-block; background-color: #0d4eea; color: white; padding: 9px 16px; border-radius: 6px; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>
    <h3>Pesan Berhasil Dikirim</h3>
    <p>Terimakasih, <?= $_POST["nama"] ?>!</p>

    <ul>
        <li>Nama: <?=$_POST["nama"]?></li>
        <li>Kelas: <?=$_POST["kelas"]?></li>
        <li>Pesan/Kesan: <?=$_POST["pesan"]?></li>
</ul>

<a href="index.php">Kembali ke Data Mahasiswa</a>
</body>
</html>
