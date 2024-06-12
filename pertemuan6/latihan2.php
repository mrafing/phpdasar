<?php 
// Array Associative
// definisinya sama seperti array numerik, kecuali
// key nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Muhammad Rafi",
        "nim" => "201220082",
        "email" => "201220082@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Dilla Novriandini",
        "nim" => "201220080",
        "email" => "201220080@gmail.com",
        "jurusan" => "Teknik Informatika"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs): ?>
        <ul>
            <li>Nama : <?= $mhs["nama"] ?></li>
            <li>Nim : <?= $mhs["nim"] ?></li>
            <li>Jurusan : <?= $mhs["jurusan"] ?></li>
            <li>Email : <?= $mhs["email"] ?></li>
        </ul>
    <?php endforeach ?>

</body>
</html>
