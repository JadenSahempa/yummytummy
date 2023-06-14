<?php
include('cekLogin.php')
?>
<html>

<head>
    <title>Resep 2</title>
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
        <button id="resep3">resep3</button>
        <button id="resep4">resep4</button>
        <button id="resep5">resep5</button>
        <button id="resep6">resep6</button>
        <button id="resep7">resep7</button>
        <button id="resep8">resep8</button>
    </div>
    <h1> Ayam Woku</h1>
    <div class="container1">
        <img src="gambar/ayam woku.jpeg" />
    </div>
    <div class="container2">
        <span>Bahan-bahan:</span>
        <ul>
            <li> 1,5 kg ayam neger</li>
            <li> 1 1/2 sachet kaldu ayam </li>
            <li> 3 ikat daun kemangi</li>
            <li> 1 lembar daun kunyit</li>
            <li> 3 lembar daun salam</li>
            <li> 3 lembar daun jeruk</li>
            <li> irisan daun bawang</li>
            <li> 1 lembar daun pandan</li>
            <li> 4-5 jeruk nipis</li>
            <li>1-2 buah tomat/diganti cuka secukupnya</li>
            <li>minyak goreng untuk tumis</li>
            <li>air 3-4 cup</li>
            <li>4-5 rawit utuh</li>
        </ul>
        <br>
        <ul>
            <span>Bumbu halus :</span>
            <li>6 butir bawang merah</li>
            <li>6 siung bawang putih</li>
            <li>4-5 batang cabai merah besar</li>
            <li>5-6 batang cabai merah keriting</li>
            <li>10-15 cabai rawit hijau/merah/oranye</li>
            <li>5-6 butir kemiri</li>
            <li>1/2 batang jahe</li>
            <li>1 batang kunyit</li>
            <li>garam dan gula pasir secukupnya</li>
        </ul>
        <br>
        <ul>
            <span> memasak: </span>
            <li>Cuci bersih ayam, lalu balur dan rendam ayam dengan jeruk nipis dan garam</li>
            <li>umis bumbu halus sampai harum lalu masukkan daun kunyit, daun salam, daun bawang, daun jeruk, daun pandan dan cabai rawit utuh hingga harum</li>
            <li>Masukkan ayam, aduk rata agar semua bumbunya larut</li>
            <li>Rebus sebentar, aduk sesekali biar rata semua. Masukkan garam, gula pasir, kaldu bubuk, rebus sampai air menyusut</li>
            <li>Jika sudah matang, masukkan daun kemangi dan aduk rata</li>
            <li>Masak sebentar dan sajikan.</li>
        </ul>
    </div>


    <script src="js/index.js"></script>
    <script>
        document.getElementById("resep1").onclick = function() {
            window.location.href = "resep1.php";
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
        document.getElementById("resep8").onclick = function() {
            window.location.href = "resep8.php";
        };
    </script>
</body>

</html>