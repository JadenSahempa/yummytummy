<?php
include('cekLogin.php')
?>
<html>

<head>
    <title>Resep 6</title>
    <style>
        body {
            background-color: white;
        }

        .container1 {


            display: flex;
            justify-content: center;
            text-align: center;

        }

        .container2 {

            margin-top: 10px;

        }

        .container {
            background-color: #000000;
            border: none;
            color: white;
            margin-bottom: 15px;
            text-decoration: none;
            display: flex;
            justify-content: center;
            font-size: 16px;
            border-radius: 5px;
        }

        img {
            max-width: 100%;
            max-height: 100%;
            height: 400px;
            width: 600px;

        }


        h1 {
            font-size: 48px;
            /* ukuran font */
            color: #333;
            /* warna font */
            margin-top: 30px;
            /* jarak atas */
            margin-bottom: 20px;
            /* jarak bawah */
            padding: 10px;
            /* padding */
            text-align: center;
            /* posisi teks */
            text-transform: uppercase;
            /* merubah teks menjadi uppercase */
            letter-spacing: 2px;
            /* jarak antar huruf */
            font-weight: bold;
            /* tebal font */
            font-family: "Montserrat", sans-serif;
            /* jenis font */
            transition: transform 0.3s ease-in-out;
            background-color: #FFBD59;


        }

        h1:hover {
            transform: scale(1.2);


        }

        span,
        li {
            color: black;
            font-size: 25px;
        }


        button {
            background-color: #ffffff;
            color: #000000;
            border: 2px solid #000000;
            border-radius: 10px;
            box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
            transition: all 0.3s ease;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            display: inline-block;
            margin: 5px;
        }

        button:hover {
            background-color: #000000;
            color: #ffffff;
            box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
        }
    </style>



</head>

<body>
    <div class="container">
        <button id="ChangePageButton">Back</button>
        <button id="resep1">resep1</button>
        <button id="resep2">resep2</button>
        <button id="resep3">resep3</button>
        <button id="resep4">resep4</button>
        <button id="resep5">resep5</button>
        <button id="resep7">resep7</button>
        <button id="resep8">resep8</button>
    </div>
    <h1> Cumi Bakar Khas Manado </h1>
    <div class="container1">
        <img src="gambar/cumi bakar khas manado.jpeg" />
    </div>
    <div class="container2">
        <span>Bahan-bahan:</span>
        <ul>
            <li>6 ekor cumi-cumi segar</li>
            <li>3 siung bawang putih, iris</li>
            <li>5 siung bawang merah, iris</li>
            <li>2 buah tomat, potong kecil-kecil</li>
            <li>1 lembar daun pandan</li>
            <li>2 sdm minyak goreng</li>
        </ul>
        <br>
        <ul>
            <span>Bumbu halus:</span>
            <li>3 siung bawang putih</li>
            <li>5 siung bawang merah</li>
            <li>6 buah cabai merah</li>
            <li>2 batang sereh, iris</li>
            <li>3 cm jahe 2 lembar daun salam</li>
            <li>1 sdt gula 1 buah jeruk nipis, peras ambil airnya</li>
            <li>1 sdt garam 1/2 sdt lada hitam</li>
        </ul>
        <br>
        <ul>
            <span> memasak: </span>
            <li>Bersihkan cumi, kupas, lepas, lalu potong kecil kepala cumi, campur dengan irisan bawang merah, irisan bawang putih dan potongan tomat, lalu aduk dengan bumbu tambahan, garam dan gula secukupnya</li>
            <li>Kemudian isi campuran ke dalam cumi-cumi, tutup dengan lidi agar isi tidak keluar</li>
            <li>Haluskan bumbu, bawang putih, bawang merah, cabai merah, jahe dan garam</li>
            <li>Siapkan wajan, panaskan, masukkan cumi-cumi, lalu siram dengan bumbu halus, air kaldu, sereh, daun salam, daun pandan dan perasan jeruk nipis, tutup wajan dan masak selama 5 menit</li>
        </ul>
    </div>


    <script src="js/index.js"></script>
    <script>
        document.getElementById("resep1").onclick = function() {
            window.location.href = "resep1.php";
        };
        document.getElementById("resep2").onclick = function() {
            window.location.href = "resep2.php";
        };
        document.getElementById("resep3").onclick = function() {
            window.location.href = "resep3.php";
        };
        document.getElementById("resep4").onclick = function() {
            window.location.href = "resep4.php";
        };
        document.getElementById("resep5").onclick = function() {
            window.location.href = "resep5.php";
        };
        document.getElementById("resep7").onclick = function() {
            window.location.href = "resep7.php";
        };
        document.getElementById("resep8").onclick = function() {
            window.location.href = "resep8.php";
        };
    </script>
</body>

</html>