<?php
include('koneksiDb.php');

// DELETE - Menghapus pengguna
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $namida = $conn->real_escape_string($id);

    $sql = "DELETE FROM users WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        header('Location: superAdmin.php');
    } else {
        header('Location: superAdmin.php');
    }
}
