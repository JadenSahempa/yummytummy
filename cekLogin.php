<?php

// Halaman ini adalah halaman pengecekan apakah halaman memiliki session atau tidak
// Oleh sebab itu makanya tiap halaman memiliki include halaman ini
session_start();

include('koneksiDb.php');

// Memeriksa apakah ada data sesi yang valid di database
if (isset($_SESSION['nama']) && isset($_SESSION['password'])) {



    $username = $_SESSION['nama'];
    $password = $_SESSION['password'];
    $id = $_SESSION['id'];
    // echo ($username)

    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);



    if (mysqli_num_rows($result) === 0) {

        // Jika data sesi tidak valid, arahkan kembali ke form login
        header("Location: index.php");
        exit();
    }
} else {
    // Jika tidak ada sesi, arahkan kembali ke form login

    header("Location: index.php");
    exit();
}

// Menutup koneksi ke database
mysqli_close($conn);
