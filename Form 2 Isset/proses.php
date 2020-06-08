<?php

if (isset($_POST["submit"])) {
    echo    "Nama Siswa : " . $_POST["nama"] . "<br>";
    echo    "Email Siswa :" . $_POST["email"] . "<br>";
    if (isset($_POST["belajar"])) {
        echo    "Mau belajar apa? " . $_POST["belajar"];
    }
} else {
    echo "<h1>";
    echo "Halaman ini hanya bisa diakses lewat form";
    echo "</h1>";
}
