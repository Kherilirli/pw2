<?php
// Konfigurasi database
$host = 'localhost';
$dbname = 'dbpuskesmas'; 
$user = 'root'; 
$pass = ''; 

$dsn = "mysql:host=$host;dbname=$dbname";

// Buat koneksi Database
$dbh = new PDO($dsn, $user, $pass);


?>