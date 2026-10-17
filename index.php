<?php
  $mahasiswa = [
    ["nim" => "25001", "nama" => "Zihan Rostianti", "jurusan" => "Pendidikan Sistem dan Teknologi Informasi", "email" => "zihan@upi.edu", "nilai" => 88],
    ["nim" => "25002", "nama" => "Muhamad Firdaus Fathurahman", "jurusan" => "Sistem Telekomunikasi", "email" => "daus@upi.edu", "nilai" => 76],
    ["nim" => "25003", "nama" => "Claudya Alexa", "jurusan" => "Mekatronika dan Kecerdasan Buatan", "email" => "claudya@upi.edu", "nilai" => 67],
    ["nim" => "25004", "nama" => "Muhammad Faris", "jurusan" => "Pendidikan Sistem dan Teknologi Informasi", "email" => "faris@upi.edu", "nilai" => 92],
    ["nim" => "25005", "nama" => "Aurora Sintya", "jurusan" => "Mekatronika dan Kecerdasan Buatan", "email" => "rora@upi.edu", "nilai" => 58]
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa</title>
  <style>
    body { font-family: "Times New Roman", Times, serif; background: #eef2fb; padding: 40px 20px; }
    .card { max-width: 960px; margin:0 auto; background: #fff; padding: 28px 32px; border-radius: 14px; box-shadow: 0 8px 24px rgba(30,64,175,0.12); }
    .header  {display: flex; justify-content: space-between; align-items: flex-start; h1  margin: 0 0 6px; }
    .btn { display: inline-block; padding: 9px 16px; background: #0d4eea; color: #fff; text-decoration: none; border-radius: 6px; font-weight: bold; cursor: pointer; font-family: inherit; }
    .btn.kecil { padding: 6px 12px; font-size: 13px; }
    table {}
    th { background: #e5ebff; text-align: left; padding: 12px 10px; font-size: 14px;}
    td {padding: 12px 10px; font-size: 14px; border-bottom: 1px solid #e5e7eb;}
    .lulus { color: #15803d; font-weight: bold; }
    .tidak-lulus { color: #dc2626; font-weight: bold; }
  </style>
</head>
<body>
<div class="card">
<div class="header">
<div>
<h1>Daftar Mahasiswa</h1>
<p class="sub">Mini Website PHP Dasar</p>
</div>
<a class="btn" href="form_pesan.php">Isi Form Pesan</a>
</div>
<table>
<thead>
<tr>
<th>No.</th>
<th>NIM</th>
<th>Nama</th>
<th>Jurusan</th>
<th>Nilai</th>
<th>Grade</th>
<th>Status</th>
<th>Detail</th>
</tr>
</thead>
<tbody>
<?php $no = 1; ?>
<?php foreach ($mahasiswa as $data): ?>
<?php
if ($data["nilai"] >= 80) {$grade = "A";} 
elseif ($data["nilai"] >= 70) {$grade = "B";} 
elseif ($data["nilai"] >= 60) {$grade = "C";} 
else {$grade = "D";}
if ($data["nilai"] >= 70) {$status = "Lulus"; $kelas = "lulus";} 
else {$status = "Tidak Lulus"; $kelas = "tidak-lulus";} ?>
<tr>
   <td><?= $no ?></td>
   <td><?= $data["nim"] ?></td>
   <td><?= $data["nama"] ?></td>
   <td><?= $data["jurusan"] ?></td>
   <td><?= $data["nilai"] ?></td>
   <td><?= $grade ?></td>
   <td class="<?= $kelas ?>"><?= $status ?></td>
   <td>
   <a class="btn kecil" href="detail.php?nim=<?= $data["nim"] ?>&nama=<?= $data["nama"] ?>&jurusan=<?= $data["jurusan"] ?>&email=<?= $data["email"] ?>&nilai=<?= $data["nilai"] ?>&grade=<?= $grade ?>&status=<?= $status ?>">
    Lihat Detail
   </a>
   </td>
   </tr>
   <?php $no++; ?>
   <?php endforeach; ?>
   </tbody>
   </table>
  </div>
</body>
</html>



  