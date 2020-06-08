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
    echo    "Nama Siswa : " . $_POST["nama"] . "<br>";
    echo    "Email Siswa :" . $_POST["email"] . "<br>";
    if (isset($_POST["belajar"])) {
        echo    "Mau belajar apa? " . $_POST["belajar"];
    }
    ?>
</body>

</html>