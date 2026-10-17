<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Pesan</title>
<style>
html { background-color: #eef2fb; }
body { font-family: "Times New Roman", Times, serif; max-width: 520px; margin: 40px auto; padding: 28px 32px; background-color: white; border-radius: 14px; }
input, textarea { width: 100%; box-sizing: border-box; padding: 8px; font-family: inherit; }
button, a { display: inline-block; background-color: #0d4eea; color: white; padding: 9px 16px; border: 0; border-radius: 6px; text-decoration: none; font-weight: bold; font-family: inherit; font-size: 14px; cursor: pointer; }
a { background-color: #4b5563; }
</style>
</head>
<body>
    <h3>Form Pesan Mahasiswa</h3>

<form action="hasil_pesan.php" method="POST">
Nama :
<input type="text" name="nama">
<br>
<br>
 Kelas :
<input type="text" name="kelas">
<br>
<br>
Pesan / Kesan :
<textarea name="pesan" rows="5"></textarea>
<br>
<br>
<button type="submit" name="tombol_kirim">Kirim</button>
<a href="index.php">Kembali</a>
</form>
</body>
</html>