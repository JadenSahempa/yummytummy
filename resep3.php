<?php
include('cekLogin.php')
?>
<html>

<head>
    <title>Resep 3</title>
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
        <button id="resep4">resep4</button>
        <button id="resep5">resep5</button>
        <button id="resep6">resep6</button>
        <button id="resep7">resep7</button>
        <button id="resep8">resep8</button>
    </div>
    <h1> Pampis Tongkol </h1>
    <div class="container1">
        <img src="gambar/pampis tongkol.jpeg" />
    </div>
    <div class="container2">
        <span>Bahan-bahan:</span>
        <ul>
            <li>1 ekor ikan tongkol</li>
            <li>air jeruk nipis</li>
            <li>2 batang serai, memarkan</li>
            <li>5 lembar daun jeruk</li>
            <li>2 lembar daun kunyit, iris halus</li>
            <li>1 lembar daun pandan, ikat simpul</li>
            <li>1 rantang daun kemangi petik</li>
            <li>2 batang daun bawang, iris</li>
            <li>garam dan gula pasir secukupnya</li>
        </ul>
        <br>
        <ul>
            <span>Bumbu halus :</span>
            <li>20 butir bawang merah</li>
            <li>8 siung bawang putih</li>
            <li>20 buah cabai merah keriting</li>
            <li>25 buah cabai rawit merah</li>
            <li>seruas kunyit</li>
            <li>seruas jahe</li>
        </ul>
        <br>
        <ul>
            <span> memasak: </span>
            <li>Bersihkan ikan tongkol, beri garam dan air jeruk nipis. Diamkan sebentar, kukus sampai matang. Suwir-suwir dagingnya. Sisihkan</li>
            <li>Tumis bumbu halus bersama bumbu faun kecuali kemangi sampai harum. Beri garam dan gula secukupnya</li>
            <li>Masukkan ikan tongkol suwir, aduk rata sampai bumbu meresap</li>
            <li>ebelum diangkat masukkan kemangi. Aduk sebentar. Sajikan.</li>
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
        document.getElementById("resep8").onclick = function() {
            window.location.href = "resep8.php";
        };
    </script>
</body>

</html>