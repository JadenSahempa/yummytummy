<?php
include('cekLogin.php')
?>
<html>

<head>
    <title>Resep 8</title>
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
        <button id="resep6">resep6</button>
        <button id="resep7">resep7</button>
    </div>
    <h1> Garo Bunga dan Daun Pepaya </h1>
    <div class="container1">
        <img src="gambar/Garo Bunga dan Daun Pepaya.jpeg" />
    </div>
    <div class="container2">
        <span>Bahan-bahan:</span>
        <ul>
            <li>200 g cakalang asap/fufu</li>
            <li>150 g daun pepaya muda</li>
            <li>250 g bunga pepaya</li>
            <li>100 g daun melinjo muda</li>
            <li>50 g daun kemangi</li>
            <li>100 ml minyak goreng</li>
        </ul>
        <br>
        <ul>
            <span>Bumbu Iris</span>
            <li>3 lembar daun pandan, iris halus</li>
            <li>3 batang serai bagian putih, iris halus</li>
            <li>10 lembar daun jeruk, buang tulang tengahnya, iris-iris</li>
            <li>3 lembar daun kunyit, iris halus</li>
            <li>3 batang daun bawang, iris halus</li>
        </ul>
        <br>
        <ul>
            <span>Bumbu Halus</span>
            <li>15 butir bawang merah</li>
            <li>6 buah cabai merah (sesuai selera)</li>
            <li>20 buah cabai rawit</li>
            <li>2 cm jahe </li>
            <li>1 sdt garam</li>
        </ul>
        <ul>
            <span> memasak: </span>
            <li>Cuci & Rendam kacang merah semalaman atau hingga kacang tidak mengkerut.</li>
            <li>Rebus kacang terlebih dahulu skitar 10 menit, lalu masukkan daging (yg telah di blansir agar keluar lemak & kotorannya). Masak menggunakan panci presto selama 25 menit. Jika direbus tanpa presto skitar 2-3 jam api kecil.</li>
            <li>Matikan api. Biarkan panci presto tertutup & tunggu hingga tidak mengeluarkan uap. (Tdk perlu melepas tutupan uap)</li>
            <li>Tumis bawang putih & bawang merah dengan sedikit mentega/minyak hingga matang agak kecoklatan. Tuang ke dalam sup. Bumbui & koreksi rasa.</li>
            <li>Matikan api, masukkan daun2an, tutup kembali.</li>
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
        document.getElementById("resep6").onclick = function() {
            window.location.href = "resep6.php";
        };
        document.getElementById("resep7").onclick = function() {
            window.location.href = "resep7.php";
        };
    </script>
</body>

</html>