<?php
include 'assets/data/data.php'; //Include untuk dapat mengakses file data.php agar dapat mengambil data produk
session_start(); //insialisasi session_start agar bisa menggunakan session
$username = $_SESSION['username']; //Set session username ke dalam variabel $username

if (!isset($username)) { //Jika session username tidak ada maka redirect ke halaman login.php
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/dist/css/style.css" rel="stylesheet">
    <title>Home</title>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top header-scrolled">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <!-- <span style="padding-left: 0.2em;"></span> -->
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#products">Transaction</a></li>

                    <li><a class="logout scrollto" href="logout.php">Logout</a></li>
                </ul>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1>Lengkapi Hidup Anda dengan Furnitur yang Tepat</h1>
                    <h2>Ciptakan ruang impian Anda dengan furnitur berkualitas tinggi yang dirancang untuk kenyamanan dan gaya.</h2>
                    <div>
                        <div class="text-center text-lg-start">
                            <a href="#products" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Get Started</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img">
                    <img src="assets/img/hero-img.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <!-- ======= Produk Section ======= -->
    <section id="products" class="products">
        <div class="container aos-init aos-animate">
            <header class="section-header">
                <h2>Our Products</h2>
                <p>Furnitur dengan kualitas yang terbaik</p>
            </header>

            <div class="row">

                <!-- loop foreach untuk mengambil atau menampilkan data yang berisi array yaitu $data yang ingin diiterasi,lalu $produk menyimpan nilai dari setiap elemen array, dan $index adalah kunci atau indeks dari array tersebut.  -->
                <?php foreach ($data as $index => $produk) : ?>
                    <div class="col-lg-3 aos-init aos-animate gy-4">
                        <div class="box">
                            <!-- Menampilkan gambar produk sesuai dengan data yang ingin ditampilkan dengan mengambil nilai 'gambar' dari array -->
                            <img src="assets/img/products/<?= $produk['gambar'] ?>" class="img-fluid" alt="">

                            <!-- Menampilkan nama produk sesuai dengan data yang ingin ditampilkan dengan mengambil nilai 'nama' dari array -->
                            <h3><?= $produk['nama'] ?></h3>

                            <!-- Menampilkan deskripsi produk sesuai dengan data yang ingin ditampilkan dengan mengambil nilai 'deskripsi' dari array -->
                            <p><?= $produk['deskripsi'] ?></p>
                            <p>
                                <!-- Menampilkan harga produk sesuai dengan data yang ingin ditampilkan dengan mengambil nilai 'harga' dari array, lalu menggunakan format_number untuk memformat angka ribuan dengan pemisah koma(,) -->
                                <strong>Rp. <?= number_format($produk['harga'], 0) ?></strong>
                            </p>
                            <p>
                                <!-- button yang mengarahkan pengguna ke halaman transaction dengan menambahkan/mengirim parameter 'id' yang nilainya adalah indeks dari produk -->
                                <a href="transaction.php?id=<?= $index ?>" class="btn btn-primary">Check out</a>
                            </p>
                        </div>
                    </div>
                    <!-- akhir dari loop/perulangan yang dilakukan dan setelahnya tidak akan diulang -->
                <?php endforeach; ?>
            </div>
        </div>

    </section>
    <!-- End Produk Section -->

    <!-- ======= Footer ======= -->
    <!-- include untuk mengambil bagian footer yang sudah ada -->
    <?php include 'partials/footer.php'; ?>
    <!-- End Footer -->

    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>