<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Utuh</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <h2>Form Registrasi PPDB Siswa</h2>
        <form action="proses.php" method="POST">
            <fieldset>
                <legend>Biodata Peserta</legend>
                <p>
                    <label for="nama"> Nama Siswa</label>
                    <input type="text" name="nama" placeholder="Isi Nama Siswa" id="nama">
                </p>
                <p>
                    <label for="nim"> NIM Siswa</label>
                    <input type="text" name="nim" placeholder="Isi NIM Siswa" id="nim">
                </p>
                <p>
                    <label for="tanggal"> Tanggal</label>
                    <select name="tanggal" id="">
                        <?php
                        for ($i = 1; $i <= 31; $i++) {
                            echo "<option value=$i>";
                            echo str_pad($i, 2, "0", STR_PAD_LEFT);
                            echo "</option>";
                        } ?>
                    </select>
                    <select name="bulan" id="bulan">
                        <option value="Januari">Januari</option>
                        <option value="Februari">Februari</option>
                        <option value="Maret">Maret</option>
                        <option value="April">April</option>
                        <option value="Mei">Mei</option>
                        <option value="Juni">Juni</option>
                        <option value="Juli">Juli</option>
                        <option value="Agustus">Agustus</option>
                        <option value="September">September</option>
                        <option value="Oktober">Oktober</option>
                        <option value="Nopember">Nopember</option>
                        <option value="Desember">Desember</option>
                    </select>
                    <select name="tahun" id="tahun">
                        <?php
                        for ($i = 1900; $i <= 2020; $i++) {
                            echo "<option>$i";
                            echo "</option>";
                        } ?>
                    </select>
                </p>


                <p>
                    <label for="alamat"> Alamat Siswa</label>
                    <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea>
                </p>
                <p>
                    <label for="radio"> Jenis Kelamin</label>
                    <label for=""><input type="radio" name="jk" value="Laki-laki" id="">Laki-laki</label>
                    <label for=""><input type="radio" name="jk" value="perempuan" placeholder="" id="">Perempuan</label>
                </p>
                <fieldset>
                    <legend>User Account</legend>
                    <p>
                        <label for="username"> Username</label>
                        <input type="text" name="username" placeholder="Isikan Username" id="username">
                    </p>
                    <p>
                        <label for="email"> Email Siswa</label>
                        <input type="text" name="email" placeholder="Isikan Email" id="email">
                    </p>
                    <p>
                        <label for="password"> Password</label>
                        <input type="password" name="password" placeholder="Masukkan Password" id="password">
                    </p>
                    <p>
                        <label for="ulangipassword"> Ulangi Password</label>
                        <input type="password" name="ulangipassword" placeholder="Ulangi Password" id="ulangipassword">
                    </p>
                </fieldset>
                <fieldset>
                    <legend>Resolusi Tanhun ini</legend>
                    <p>
                        <label for="html"> Menguasai HTML</label>
                        <input type="checkbox" name="html" placeholder="" id="html" value="HTML">
                    </p>
                    <p>
                        <input type="checkbox" name="css" placeholder="" id="css" value="CSS">
                        <label for="css"> Paham CSS</label>
                    </p>
                    <p>
                        <input type="checkbox" name="php" placeholder="" id="php" value="PHP">
                        <label for="php"> Master PHP</label>
                    </p>
                </fieldset>
                <input type="submit" value="Proses">

        </form>

    </div>

</body>

</html>