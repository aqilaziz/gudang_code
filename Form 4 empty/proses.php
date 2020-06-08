<?php


if (!isset($_POST["submit"])) {
    header("Location: index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Halaman Proses</h1>
    <?php
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    /*    $belajar = $_POST["belajar"]; */

    if (empty($nama)) {
        echo "Nama Wajib diisi <br>";
    } else {
        echo "Nama Siswa : $nama <br>";
    }
    if (empty($email)) {
        echo "Email wajib diisi <br>";
    } else {
        echo "Email anda adalah : $email <br>";
    }
    if (isset($_POST["belajar"])) {
        echo    "Mau belajar apa? " . $_POST["belajar"];
    }


    ?>
</body>

</html>