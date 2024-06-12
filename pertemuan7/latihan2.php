<?php 
// cek apakah tidak ada data di $_GET
if( !isset($_GET["nama"]) ||
    !isset($_GET["nim"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["jurusan"])
) {
    // redirect
    header("Location: latihan1_lanjutan2.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <li><?= $_GET['nama']; ?></li>
        <li><?= $_GET['nim'] ?></li>
        <li><?= $_GET['email'] ?></li>
        <li><?= $_GET['jurusan'] ?></li>
    </ul>

    <a href="latihan1_lanjutan2.php">Kembali</a>
</body>
</html>