<?php
include('cekLogin.php')
?>

<html>

<head>
    <title>Resep 1</title>
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
        <button id="resep2">resep2</button>
        <button id="resep3">resep3</button>
        <button id="resep4">resep4</button>
        <button id="resep5">resep5</button>
        <button id="resep6">resep6</button>
        <button id="resep7">resep7</button>
        <button id="resep8">resep8</button>
    </div>
    <h1> Rica Rodo</h1>
    <div class="container1">
        <img src="gambar/Rica Rodo.jpeg" />
    </div>
    <div class="container2">
        <span>Bahan-bahan:</span>
        <ul>
            <li> 3 butir daun bawang, iris halus</li>
            <li> 3 siung bawang merah</li>
            <li> 1 lembar daun pandan, ikat simpul saja</li>
        </ul>
        <br>
        <ul>
            <span>Bumbu halus :</span>
            <li>10 buah cabai rawit merah (boleh tambah atau kurangi)</li>
            <li> 2 buah terong ukuran sedang, potong potong kurang lebih 3 cm</li>
            <li>1 ikat kecil kacang panjang, potong-potong kurang lebih 3 cm</li>
            <li> secukupnya garam, gula/penyedap rasa</li>
            <li> 1 ikat kemangi</li>
            <li> 3 buah daun jeruk, buang tulang</li>
            <li> 1 buah daun kunyit, sobek-sobek</li>
            <li> 1 buah jagung manis, dipipil</li>
            <li> 4 siung bawang putih</li>
            <li> 1 batang sereh, memarkan</li>
            <li> 3 cm jahe</li>
        </ul>
        <br>
        <ul>
            <span> memasak: </span>
            <li> Panaskan minyak lalu tumis batang sereh, daun pandan, daun bawang, daun jeruk dan daun kunyit sampai wangi </li>
            <li> Setelah harum masukkan bumbu halus cabai, bawang merah dan bawang putih dan jahe. Aduk-aduk sampai merata lalu tambahkan secukupnya garam, gula/penyedap rasa. Test rasa</li>
            <li> Kemudian masukkan pipilan jagung, kacang panjang, terong dan daun kemangi. Aduk-aduk lalu tutup wajan. Tunggu beberapa menit kira
            <li>kira sayuran sudah matang</li>
            <li> Angkat dan hidangkan.</li>
        </ul>
    </div>


    <script src="js/index.js"></script>
    <script>
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
        document.getElementById("resep8").onclick = function() {
            window.location.href = "resep8.php";
        };
    </script>
</body>

</html>