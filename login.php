<?php
include('koneksiDb.php');
//Data yang dikirim dari form Login lewat metode post
$user = $_POST['username'];
$pass = $_POST['password'];

// Mengecek username dan password dalam database
$query = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) === 1) {
    // Jika username dan password valid, session dimulai
    session_start();
    $_SESSION['nama'] = $user;
    $_SESSION['password'] = $pass;

    // Mengambil ID dari database
    $row = mysqli_fetch_assoc($result);
    $userId = $row['id'];
    $_SESSION['id'] = $userId;

    if ($user == "super_admin") {
        header("Location: superAdmin.php");
    } else {
        header("Location: halamanUtama.php");
    }
    // Diarahkan ke halaman Utama
} else {
    // Jika username atau password salah, diarahkan kembali ke form login
    header("Location: index.php");
}

// Menutup koneksi ke database
mysqli_close($conn);
