<?php

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $prodi = $_POST['prodi'];
    $keahlian = $_POST['keahlian'];
    $domisili = $_POST['domisili'];
    $email = $_POST['email'];

?>

<h1>Terima Kasih Sudah Mendaftar di IT Club Data Science</h1>
<h5>Nama Lengkap : <?= $nama; ?></h5>
<h5>NIM : <?= $nim; ?></h5>
<h5>Jenis Kelamin : <?= $jenis_kelamin; ?></h5>
<h5>Prodi : <?= $prodi; ?></h5>
<h5>Keahlian : <?php
if(isset($_POST['submit'])) {
    $keahlian = $_POST['keahlian'] ?? [];
    foreach($keahlian as $nilai) {
        echo $nilai,', ' ;
    }
}
?></h5>
<h5>Domisili : <?= $domisili; ?></h5>
<h5>Email : <?= $email; ?></h5>