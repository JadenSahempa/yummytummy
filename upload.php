<?php
include('cekLogin.php');
include('koneksiDb.php');

$userId = $_SESSION['id'];

// Query untuk mengambil data gambar dari database berdasarkan ID pengguna
$sql = "SELECT file_upload FROM users WHERE id = '$userId'";
$result = $conn->query($sql);




// Menutup koneksi
$conn->close();
?>


<html>

<head>
    <title>Upload Foto</title>
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
    </style>
</head>


<body>
    <nav class="Menu">
        <a href="halamanUtama.php">Home</a>
        <a href="#food">Resep</a>
        <a href="#kontak">Kontak</a>
        <a href="upload.php">Upload Foto</a>
        <a href="logout.php" class="btn-logout"><i class="fas fa-sign-out-alt"></i> Keluar</a>
    </nav>
    <div class="login">
        <h2 class="login-header">Upload Foto</h2>
        <form class="login-container" method="POST" action="simpanFile.php" enctype="multipart/form-data">
            <p>
                <input type="file" accept="image/*" name="gambar" onchange="previewImage(event)">
            </p>
            <p>Gambar Yang Di Upload :</p>
            <center>

                <?php
                if ($result->num_rows > 0) {
                    // Mengambil data gambar dari hasil query
                    $row = $result->fetch_assoc();
                    $gambar_data = $row['file_upload'];

                    // Menampilkan gambar di halaman web

                    if ($gambar_data == null) {
                        echo '<label>Gambar Belum Tersedia</label>';
                    } else {
                        echo '<img style="max-width:250px;max-height:250px" src="gambar/gambarUpload/' . $gambar_data . '"/>';
                    }
                } else {
                    echo "Gambar tidak ditemukan.";
                }
                ?>
            </center>
            <!-- <p>
                <input type="submit" value="Upload">
            </p> -->
            <button type="submit" class="btnSubmit">Submit</button>
        </form>
    </div>
</body>



</html>