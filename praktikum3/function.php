<?php

    function tambah($nilai1, $nilai2)
    {
        echo $nilai1 + $nilai2;
    }
    
    tambah(1,2);
    echo "<br>";

    function hitungLahir($tahunLahir, $tahunSkrng = 2024) 
    {
        echo $tahunSkrng - $tahunLahir;
    }

    hitungLahir(2003);
?>