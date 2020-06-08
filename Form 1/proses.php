<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Proses</title>
</head>

<body>
    <h2>Halaman Proses</h2>

    <?php
    echo "Nama : " . $_POST["nama"] . "<br>";
    echo "NIM : " . $_POST["nim"] . "<br>";
    echo "Tanggal Lahir : " . $_POST["tanggal"] . " " . $_POST["bulan"] . " " . $_POST["tahun"] . "<br>";
    echo "Alamat : " . $_POST["alamat"] . "<br>";
    echo "Jenis Kelamin : " . $_POST["jk"] . "<br>";
    echo "Username : " . $_POST["username"] . "<br>";
    echo "Alamat Email : " . $_POST["email"] . "<br>";
    echo "Password : " . $_POST["password"] . "<br>";
    echo "Konfirmasi Passoword : " . $_POST["ulangipassword"] . "<br>";
    echo "Target 1 : " . $_POST["html"] . "<br>";
    echo "Target 2 : " . $_POST["css"] . "<br>";
    echo "Target 3 : " . $_POST["php"] . "<br>";
    ?>
</body>

</html>