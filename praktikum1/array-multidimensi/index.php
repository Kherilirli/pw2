<?php

// Deklarasi array multidimensi mahasiswa
$mahasiswa = [
    ["Ziyad", "Teknik Informatika"],
    ["Farhan", "Manajemen"],
    ["Cindy", "Akuntansi"],
    ["Aisyah", "Ilmu Komunikasi"]
];

// Cetak isi array menggunakan perulangan foreach
foreach ($mahasiswa as $mhs) {
    echo "Nama : " . $mhs[0] . "<br>";
    echo "Jurusan : " . $mhs[1] . "<br>";
    echo "<br>";
}

?>