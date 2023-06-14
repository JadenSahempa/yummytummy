<?php
include('cekLogin.php');

// Variabel pencarian
$searchKeyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';

// Array resep makanan
$recipes = array(
    array(
        'gambar' => 'gambar/Rica Rodo.jpeg',
        'judul' => 'Rica Rodo',
        'link' => 'resep1.php'
    ),
    array(
        'gambar' => 'gambar/ayam woku.jpeg',
        'judul' => 'Ayam woku',
        'link' => 'resep2.php'
    ),
    array(
        'gambar' => 'gambar/pampis tongkol.jpeg',
        'judul' => 'Pampis Tongkol',
        'link' => 'resep3.php'
    ),
    array(
        'gambar' => 'gambar/bubur khas manado.jpeg',
        'judul' => 'Tinutuan',
        'link' => 'resep4.php'
    ),
    array(
        'gambar' => 'gambar/tenggiri woku.jpeg',
        'judul' => 'Tenggiri Woku',
        'link' => 'resep5.php'
    ),
    array(
        'gambar' => 'gambar/cumi bakar khas manado.jpeg',
        'judul' => 'Cumi Bakar Khas Manado',
        'link' => 'resep6.php'
    ),
    array(
        'gambar' => 'gambar/Sup Kacang Merah.jpeg',
        'judul' => 'Sup Kacang Merah',
        'link' => 'resep7.php'
    ),
    array(
        'gambar' => 'gambar/Garo Bunga dan Daun Pepaya.jpeg',
        'judul' => 'Garo Bunga dan Daun Pepaya',
        'link' => 'resep8.php'
    ),
    // Tambahkan resep lainnya di sini
);



// Fungsi untuk mencari resep berdasarkan keyword
function searchRecipes($recipes, $keyword)
{
    $results = array();

    foreach ($recipes as $recipe) {
        // Jika judul resep mengandung keyword
        if (stripos($recipe['judul'], $keyword) !== false) {
            $results[] = $recipe;
        }
    }

    return $results;
}

// Memanggil fungsi pencarian
$searchResults = searchRecipes($recipes, $searchKeyword);
?>
<html>
<style>
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

    .admin {
        color: white;
        float: left;
        margin-right: 30px;
        padding: 10px;
        font-size: 20px;
    }
</style>

<head>
    <title> Makanan </title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <div class="container">
        <nav class="Menu">
            <?php echo "<label class='admin'>Welcome, $username !</label>" ?>
            <a href="halamanUtama.php">Home</a>
            <a href="#food">Resep</a>
            <a href="#kontak">Kontak</a>
            <a href="upload.php">Upload Foto</a>
            <a href="logout.php" class="btn-logout"><i class="fas fa-sign-out-alt"></i> Keluar</a>
        </nav>

        <h1>Welcome to Our Website</h1>
        <?php echo "<h1>Halo, $username !</h1>" ?>
    </div>

    <div class="container1">
        <div class="gambar1"></div>
        <h2 class="quote">Selamat datang di website kami, tempat terbaik untuk mencari dan membagikan resep makanan. Kami menawarkan beragam resep makanan dari berbagai penjuru dunia, lengkap dengan petunjuk cara membuatnya. Selamat memasak dan selamat mencoba!</h2>
    </div>
    </div>

    <!--chia pe batas code-->

    <!-- <div class="container_resep" id="food">
        <div class="recipe">
            <img src="gambar/Rica Rodo.jpeg">
            <h2>Rica Rodo</h2>
            <a href="resep1.php">Lihat Resep</a>
        </div>
        <div class="recipe">
            <img src="gambar/ayam woku.jpeg">
            <h2>Ayam woku</h2>

            <a href="resep2.php">Lihat Resep</a>
        </div>
        <div class="recipe">
            <img src="gambar/pampis tongkol.jpeg">
            <h2>Pampis Tongkol</h2>

            <a href="resep3.php">Lihat Resep</a>
        </div>
        <div class="recipe">
            <img src="gambar/bubur khas manado.jpeg">
            <h2>Tinutuan</h2>

            <a href="resep4.php">Lihat Resep</a>
        </div>
    </div>
    <div class="container_resep">
        <div class="recipe">
            <img src="gambar/tenggiri woku.jpeg">
            <h2>Tenggiri Woku</h2>

            <a href="resep5.php">Lihat Resep</a>
        </div>
        <div class="recipe">
            <img src="gambar/cumi bakar khas manado.jpeg">
            <h2>Cumi Bakar Khas Manado</h2>

            <a href="resep6.php">Lihat Resep</a>
        </div>
        <div class="recipe">
            <img src="gambar/Sup Kacang Merah.jpeg">
            <h2>Sup Kacang Merah</h2>

            <a href="resep7.php">Lihat Resep</a>
        </div>
        <div class="recipe">
            <img src="gambar/Garo Bunga dan Daun Pepaya.jpeg">
            <h2>Garo Bunga dan Daun Pepaya</h2>

            <a href="resep8.php">Lihat Resep</a>
        </div>
    </div> -->
    <!--chia pe batas code-->

    <center>
        <input type="text" name="keyword" id="searchInput" placeholder="Cari resep..." style="margin-top: 20px;height:35px;width:450px">
    </center>

    <div class="container_resep" id="food">
        <?php foreach ($searchResults as $result) : ?>
            <div class="recipe">
                <img src="<?php echo $result['gambar']; ?>">
                <h2><?php echo $result['judul']; ?></h2>
                <a href="<?php echo $result['link']; ?>">Lihat Resep</a>
            </div>
        <?php endforeach; ?>
    </div>

    <nav class="aboutustulisan">About us</nav>
    <div class="container2" id="kontak">
        <div class="about">
            <img src="gambar/Aldi.jpeg" class="photo">
            <h3>Neville Lukow</h3>
            <h3>210211060288</h3>
            <a href="https://instagram.com/nevills__?igshid=ZDdkNTZiNTM=" class="A"><i class="fab fa-instagram"></i> nevills_</a><br>
            <br>
            <a href="https://www.facebook.com/neville.lukow.3?mibextid=ZbWKwL" class="A"><i class="fab fa-facebook"></i> Neville. Lukow</a>
        </div>
        <div class="about">
            <img src="gambar/chia.jpeg" class="photo">
            <h3>Patricia Manalip</h3>
            <h3>210211060164</h3>
            <a href="https://instagram.com/chiamanalip?igshid=OTJhZDVkZWE=" class="A"><i class="fab fa-instagram"></i> chiamanalip</a><br>
            <br>
            <a href="https://www.facebook.com/patricia.manalip.9?mibextid=ZbWKwL" class="A"><i class="fab fa-facebook"></i> Chia Manalip</a>
        </div>

        <div class="about">
            <img src="gambar/samuel.jpeg" class="photo">
            <h3>Samuel Sahempa</h3>
            <h3>210211060083</h3>
            <a href="https://instagram.com/s.sahempa?igshid=ZDdkNTZiNTM=" class="A"><i class="fab fa-instagram"></i> s.sahempa</a>
            <br>
            <br>
            <a href="https://www.facebook.com/samuel.sahempa?mibextid=ZbWKwL" class="A"><i class="fab fa-facebook"></i> Samuel Sahempa</a>

        </div>
        <div class="about">
            <img src="gambar/Kevin Panda.jpg" class="photo">
            <h3>Kevin Phandany</h3>
            <h3>210211060076</h3>
            <a href="https://instagram.com/kevinphandany?igshid=ZDdkNTZiNTM=" class="A"><i class="fab fa-instagram"></i> kevinphandany</a>
            <br>
            <br>
            <a href="https://www.facebook.com/profile.php?id=100008613840959&mibextid=ZbWKwL" class="A"><i class="fab fa-facebook"></i> kevinphandany</a>

        </div>
    </div>


</body>
<script>
    const searchInput = document.getElementById('searchInput');

    searchInput.addEventListener('input', function() {
        const keyword = searchInput.value.toLowerCase();
        const recipes = <?php echo json_encode($recipes); ?>;

        const searchResults = recipes.filter(function(recipe) {
            return recipe.judul.toLowerCase().includes(keyword);
        });

        displaySearchResults(searchResults);
    });

    function displaySearchResults(results) {
        const containerResep = document.getElementById('food');
        containerResep.innerHTML = '';

        results.forEach(function(result) {
            const recipeElement = document.createElement('div');
            recipeElement.className = 'recipe';

            const imgElement = document.createElement('img');
            imgElement.src = result.gambar;
            recipeElement.appendChild(imgElement);

            const h2Element = document.createElement('h2');
            h2Element.textContent = result.judul;
            recipeElement.appendChild(h2Element);

            const aElement = document.createElement('a');
            aElement.href = result.link;
            aElement.textContent = 'Lihat Resep';
            recipeElement.appendChild(aElement);

            containerResep.appendChild(recipeElement);
        });
    }
</script>
</php>