<?php
// $_GET
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
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"] ?>&nim=<?= $mhs["nim"] ?>&email=<?= $mhs['email'] ?>&jurusan=<?= $mhs['jurusan'] ?>"><?= $mhs['nama'] ?></a>
            </li>
        <?php endforeach ?>
    </ul>
</body>
</html>