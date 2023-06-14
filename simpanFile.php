<?php
session_start();
include('koneksiDb.php');
// Mendapatkan data gambar dari form
$gambar = $_FILES['gambar']['tmp_name'];
$nama_gambar = $_FILES['gambar']['name'];
$userId = $_SESSION['id'];

// Membaca gambar
$gambar_data = file_get_contents($gambar);
$gambar_data_base64 = base64_encode($gambar_data);

$sql_select = "SELECT file_upload FROM users WHERE id = '$userId'";
$result = $conn->query($sql_select);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nama_gambar_lama = $row['file_upload'];

    // Menghapus file gambar lama dari penyimpanan lokal
    $lokasi_gambar_lama = 'gambar/gambarUpload/' . $nama_gambar_lama;
    if (file_exists($lokasi_gambar_lama)) {
        unlink($lokasi_gambar_lama);
    }
}

// Query untuk menyimpan gambar ke database
$sql = "UPDATE users SET file_upload = '$nama_gambar' WHERE id = '$userId'";


// Menyimpan file gambar ke penyimpanan

$lokasi_penyimpanan = 'gambar/gambarUpload/' . $nama_gambar;
file_put_contents($lokasi_penyimpanan, $gambar_data);

if ($conn->query($sql) === TRUE) {
    header("Location: upload.php");
} else {
}
// Menutup koneksi
$conn->close();
