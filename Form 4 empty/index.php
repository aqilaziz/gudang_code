<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form2</title>
</head>

<body>
    <h1>Halaman Form Validasi </h1>
    <form action="proses.php" method="POST">
        <fieldset>
            <legend>Latihan Falidasi Form</legend>
            <p>
                <label for="nama"> Nama Siswa</label>
                <input type="text" name="nama" placeholder="isi Nama Siswa" id="nama" value="">
            </p>
            <p>
                <label for=""> Username</label>
                <input type="text" name="email" placeholder="Isikan Email" id="email" value="">
            </p>
            <p>
                <label for="belajar"> Belajar PHP</label>
                <input type="checkbox" name="belajar" placeholder="" id="belajar" value="Master PHP">
            </p>
            <p><input type="submit" value="Proses Data" name="submit"></p>
        </fieldset>

    </form>
</body>

</html>