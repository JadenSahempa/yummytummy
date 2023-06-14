<?php
// Menghubungkan ke database
$host = "localhost"; // Nama host database
$usernamee = "root"; // Username database
$password = ""; // Password database
$database = "dbtugas"; // Nama database

// Membuat koneksi ke database
$conn = mysqli_connect($host, $usernamee, $password, $database);

// Memeriksa apakah terjadi error saat koneksi
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
