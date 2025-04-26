<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSRAP CSS --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <!-- BOOTSRAP ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- CSS -->
    <link rel="stylesheet" href="style/indexNonLog.css">
    <link rel="icon" type="image/png" href="img/pohon.png">
    <title>Halaman Utama</title>
  </head>
  <body id="body">
    <!-- START NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#home">
          <img src="img/pohon2.png" alt="" width="40" height="35">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#tutorial">Cara Sewa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#product">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="native/signup.php">Registrasi</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <!-- START JUMBOTRON -->
    <section id="home" class="jumbotron text-center">
      <img src="img/pohon2.png" alt="img" width="200" class="" />
      <h1 class="display-4">Persewaan Baju Adat</h1>
      <p class="lead">Jl. Kh. Hasyim Asy'ari No. 02</p>
    </section>
  <!-- START WAFE 1 -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#997fc4" fill-opacity="1" d="M0,32L24,26.7C48,21,96,11,144,42.7C192,75,240,149,288,154.7C336,160,384,96,432,64C480,32,528,32,576,48C624,64,672,96,720,138.7C768,181,816,235,864,245.3C912,256,960,224,1008,181.3C1056,139,1104,85,1152,90.7C1200,96,1248,160,1296,202.7C1344,245,1392,267,1416,277.3L1440,288L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path></svg>
  <!-- START TUTOR -->
    <section id="tutorial" class="jumbotron text-center">
      <h3 class="display-4 mb-5">Tiga Langkah Mudah Untuk Sewa Produk</h3>
      <div class="row justify-content-center">
        <div class="col-md-3">
          <div class="card">
            <i class="bi bi-person-fill-add"></i>
            <div class="card-body">
              <p class="card-text">1. Daftar Akun<br>
              <br>
              Pendaftaran atau registrasi gratis tidak dikenakan biaya sepeserpun.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card">
            <i class="bi bi-cart4"></i>
            <div class="card-body">
              <p class="card-text">2. Registrasi dan Login<br>
              <br>
            Setelah membuat akun atau registrasi, login menggunakan akun yang telah anda buat.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card">
            <i class="bi bi-wallet2"></i>
            <div class="card-body">
              <p class="card-text">3. Sewa Produk<br>
              <br>
              Silahkan cari produk yang ingin anda sewa dan kemudian pesan produknya melalui form pesan di Contact Me.</p>
            </div>
          </div>
        </div>
        <!-- TEXT JALAN -->
        <div class="info mt-5 shadow" style="border-bottom: 3px solid black; border-top: 3px solid black; ">
          <div class="scrolling-text-container shadow">
            <div class="scrolling-text pt-3">MAU SEWA BAJU ADAT? SILAHKAN REGISTRASI TERLEBIH DAHULU 😊</div>
          </div>
        </div>
      </div>
    </section>
  <!-- START ABOUT -->
    <section id="about">
      <div class="container">
        <div class="row text-center mb-5">
          <div class="col">
            <h2 style="font-weight: bold;">About Me</h2>
          </div>
        </div>
        <div class="row m-5">
          <div class="col-md-6">
            <h5>
                Selamat datang di Toko Sewa Baju Adat Kami! Kami bangga menyediakan layanan penyewaan baju adat terbaik
                dalam lingkungan yang nyaman dan bergaya. Tersedia Baju Adat untuk Wanita, Pria, Baju Pernikahan, serta Aksesoris modern.
            </h5>
            <br>
            <h5>
                Di toko persewaan kami, kami percaya pada seni pemakaian baju adat dan berusaha menciptakan pengalaman
                unik untuk setiap pelanggan. Baik Anda mencari potongan klasik atau gaya modern, tim kami yang berbakat
                siap memenuhi kebutuhan pemakaian Anda.
            </h5>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <img src="img/pohon2.png" alt="About Us Image" class="img-fluid" height="350" width="350">
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- END ABOUT -->
  <!-- START PRODUCT -->
    <section id="product">
      <div class="container">
        <div class="row text-center mb-5">
          <div class="col">
            <h2 style="font-weight: bold;">My Product</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/Bali.jpg" class="card-img-top" alt="Project 1" />
              <div class="card-body">
                <p class="card-text">1. Baju adat Bali. Pakaian tradisional Indonesia. Indonesia traditional clothes.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/Jambi.jpg" class="card-img-top" alt="Project 2" />
              <div class="card-body">
                <p class="card-text">2. Baju adat melayu, Jambi. Pakaian tradisional Indonesia. Indonesia traditional clothes.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/Lampung.jpg" class="card-img-top" alt="Project 3" />
              <div class="card-body">
                <p class="card-text">3. Baju adat Lampung pepadun. Pakaian traditional Indonesia. Indonesia traditional clothes.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/Minangkabau.jpg" class="card-img-top" alt="Project 4" />
              <div class="card-body">
                <p class="card-text">4. Baju adat Minangkabau, sumatra Barat. Pakaian tradisional Indonesia. Indonesia traditional clothes.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/Papua.jpg" class="card-img-top" alt="Project 5" />
              <div class="card-body">
                <p class="card-text">5. Baju adat Papua. Pakaian tradisional Indonesia. Indonesia traditional clothes.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- END PRODUCT -->
  <!-- FOOTER -->
    <section class="footer">
      <div class="container">
        <div class="row text-center mb-5">
          <div class="col">
            <h2 style="font-weight: bold;">CONNECT WITH US</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <ul class="social-icons">
              <li>
                <a href="https://www.instagram.com/ilhamhilmih/" target="_blank" class="bi bi-instagram" title="Instagram"></a>
              </li>
              <li>
                <a href="https://www.facebook.com/profile.php?id=100010695283844" target="_blank" class="bi bi-facebook" title="Facebook"></a>
              </li>
              <li>
                <a href="https://twitter.com/KimGu_1" target="_blank" class="bi bi-twitter" title="Twitter"></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="row text-center mt-4">
          <div class="col">
            <p>Hak Cipta © 2023 | Semua Hak Dilindungi</p>
          </div>
        </div>
      </div>
    </section>
  <!-- END FOOTER -->
  <!-- JAVA SCRIPT -->
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      //Transparant Navbar saat discroll
      window.onscroll = function() {
          var navbar = document.querySelector('.navbar');
          if (window.scrollY > 100) {
              navbar.classList.add('scrolled');
          } else {
              navbar.classList.remove('scrolled');
          }
      };

      // Fungsi untuk menambahkan efek 3D saat mouse masuk box 3 langkah mudah untuk sewa
      function add3DEffect(card) {
          card.classList.add('card-hover');
      }

      //PRODUK
      // Fungsi untuk menghapus efek 3D saat mouse keluar
      function remove3DEffect(card) {
          card.classList.remove('card-hover');
      }
      // Ambil semua elemen kartu
      var cards = document.querySelectorAll('.card');
      // Tambahkan event listener untuk setiap kartu
      cards.forEach(function(card) {
          card.addEventListener('mouseover', function() {
              add3DEffect(card);
          });
          card.addEventListener('mouseout', function() {
              remove3DEffect(card);
          });
      });
    </script>
  </body>
</html>
