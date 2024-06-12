<?php 
$mahasiswa = [
    ["Muhammad Rafi", "201220082", "Teknik Informatika", "201220082@unmuhpnk.ac.id"],
    ["Dilla Novriandini", "201220070", "Teknik Informatika", "201220070@unmuhpnk.ac.id"],
    ["Adam", "201220090", "Teknik Informatika", "201220090@unmuhpnk.ac.id"]
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

    <?php foreach ( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>Nama : <?= $mhs[0] ?></li>
            <li>Nim : <?= $mhs[1] ?></li>
            <li>Jurusan : <?= $mhs[2] ?></li>
            <li>Email : <?= $mhs[3] ?></li>
        </ul>
    <?php endforeach ?>
</body>
</html>