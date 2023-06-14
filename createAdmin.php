<?php
include('koneksiDb.php');
// CREATE - Menambahkan pengguna baru
if (isset($_POST['create'])) {
    $nama = $_POST['username'];
    $password = $_POST['password'];
    if ($nama == "super_admin") {
        header('Location: superAdmin.php');
    } else {
        $nama = $conn->real_escape_string($nama);
        $password = $conn->real_escape_string($password);

        $sql = "INSERT INTO users (username, password) VALUES ('$nama', '$password')";

        if ($conn->query($sql) === TRUE) {
            header('Location: superAdmin.php');
        } else {
            header('Location: superAdmin.php');
        }
    }
}

