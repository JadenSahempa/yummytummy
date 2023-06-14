<?php
include('cekLogin.php');
include('koneksiDb.php');

// READ - Mendapatkan daftar pengguna
global $conn;

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
$admins = array();

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        array_push(
            $admins,
            array(
                'id' => $row["id"],
                'username' => $row["username"],
                'file_upload' => $row["file_upload"],
            )
        );
    }
} else {
    echo "Tidak ada pengguna.";
}



?>


<html>

<head>
    <title>Super Admin</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        body {
            background-image: url(gambar/bg_login.png);
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'Open Sans', sans-serif;
        }

        .login {
            width: 500px;
            margin: 16px auto;
            font-size: 16px;
            margin-top: 10%;

        }

        /* Reset top and bottom margins from certain elements */
        .login-header,
        .login p {
            margin-top: 0;
            margin-bottom: 0;
        }

        .login-header {
            background-color: #ffa500;
            padding: 20px;
            font-size: 1.4em;
            font-weight: normal;
            text-align: center;
            text-transform: uppercase;
            border-radius: 25px 25px 0 0;
            color: #fff;
            font-weight: bolder;
        }

        .login-container {
            background: #ebebeb;
            padding: 12px;
            border-radius: 0 0 25px 25px;
        }

        /* Every row inside .login-container is defined with p tags */
        .login p {
            padding: 12px;
        }

        .login input {
            box-sizing: border-box;
            display: block;
            width: 100%;
            border-width: 1px;
            border-style: solid;
            padding: 16px;
            outline: 0;
            font-family: inherit;
            font-size: 0.95em;
        }

        .login input[type="email"],
        .login input[type="password"] {
            background: #fff;
            border-color: #bbb;
            color: #555;
        }

        /* Text fields' focus effect */
        .login input[type="email"]:focus,
        .login input[type="password"]:focus {
            border-color: #888;
        }

        .login input[type="submit"] {
            background: green;
            border-color: transparent;
            color: #fff;
            cursor: pointer;
            font-weight: bolder;
        }

        .login input[type="submit"]:hover {
            background: transparent;
            color: black;
            border: 2px solid green;
        }

        /* Buttons' focus effect */
        .login input[type="submit"]:focus {
            border-color: #05a;
        }

        .btn-logout {
            background-color: transparent;
            color: white;
            float: right;
            border-radius: 15px;
            transition: .2s;
            margin-right: 30px;

        }

        .btn-logout:hover {
            background-color: #B70404;
            color: white;
        }

        .Menu {
            top: 0;
            width: 100%;
            z-index: 2;
            position: fixed;
        }

        .btnSubmit {
            padding: 8px;
            margin: 15px;
            background: green;
            border: none;
            color: white;
            border-radius: 5px
        }

        .btnSubmit:hover {
            color: black;
            background: white;
            border: 1px solid green;
            transition: .5s;
        }

        .btnDelete {
            padding: 8px;
            margin: 15px;
            background: red;
            border: none;
            color: white;
            border-radius: 5px
        }

        .btnDelete:hover {
            color: black;
            background: white;
            border: 1px solid red;
            transition: .5s;
        }

        .admin {
            color: white;
            float: left;
            margin-right: 30px;
            padding: 10px;
            font-size: 20px;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
        }

        td,
        th {
            border: 1px solid #000000;
            text-align: left;
            padding: 8px;
        }
    </style>
</head>


<body>
    <nav class="Menu">
        <?php echo "<label class='admin'>Welcome, $username !</label>" ?>
        <a href="logout.php" class="btn-logout"><i class="fas fa-sign-out-alt"></i> Keluar</a>
    </nav>
    <div class="login">
        <h2 class="login-header">Buat Admin</h2>
        <form class="login-container" method="POST" action="createAdmin.php">
            <div>
                <label for="">Masukkan Nama</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div>
                <label for="">Masukkan Password</label>
                <input type="password" name="password" id="password" required>
            </div>

            <button type="submit" name="create" class="btnSubmit">Tambah Admin</button>
        </form>
    </div>

    <hr>

    <!-- Daftar pengguna yang sudah ada -->
    <div class="login">
        <h2 class="login-header">Buat Admin</h2>
        <form class="login-container">
            <div class="login">
                <h2>Daftar Pengguna</h2>
                <table style="width: 90%;">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>File</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($admins as $result) : ?>
                            <tr>
                                <td><?php echo $result['username']; ?></td>
                                <td><?php
                                    if ($result['file_upload'] == null) {
                                        echo 'Belum Di upload';
                                    } else if ($result['file_upload'] == "-") {
                                    } else {
                                        echo '<img style="max-width:150px;max-height:150px" src="gambar/gambarUpload/' . $result['file_upload'] . '"/>';
                                        // echo $result['file_upload'];
                                    }
                                    ?></td>
                                <td>
                                    <?php if ($result['username'] == "super_admin") { ?>
                                    <?php } else { ?>
                                        <form method="POST" action="deleteAdmin.php">
                                            <input type="hidden" name="id" id="id" value="<?php echo $result['id']; ?>">
                                            <button type="submit" class="btnDelete">Hapus</button>
                                        </form>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </form>
    </div>


    <hr>

    <!-- Formulir untuk menghapus pengguna -->

</body>


<script>
    function deleteUser() {
        // Tambahkan konfirmasi pengguna sebelum menghapus
        if (confirm("Anda yakin ingin menghapus admin ini?")) {
            // Lakukan penghapusan dan reload halaman setelahnya
            location.reload();
        }
    }
</script>

</html>