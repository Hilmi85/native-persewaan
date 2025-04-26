<?php 
// Memulai atau melanjutkan sesi pengguna
session_start();

// Menyertakan file koneksi dan fungsi
include("../connection.php");
include("../functions.php");

// Memanggil fungsi untuk memeriksa login
$user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../style/index.css">
    <link rel="icon" type="image/png" href="../img/pohon.png">
    <title>Halaman Utama</title>
</head>
<body id="body">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#home">
                <img src="../img/pohon2.png" alt="" width="40" height="35">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link fw-bold underline-hover text-dark" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link underline-hover" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link underline-hover" href="#product">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link underline-hover" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="logout.php" class="nav-link bi bi-box-arrow-right" style="color:black;"></a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Jumbotron -->
    <section id="home" class="jumbotron text-center">
        <img src="../img/pohon2.png" alt="img" width="200" class="pohon2" />
        <h1 class="display-5" style="font-weight:bold;">Persewaan Baju Adat</h1>
        <p class="lead">Menyediakan Baju Adat Untuk Anak Sekolah, Baju Adat Pernikahan, dan Aksesoris</p>
    </section>
    <!-- End Jumbotron -->

    <!-- Ombak -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#997fc4" fill-opacity="1" d="M0,32L24,26.7C48,21,96,11,144,42.7C192,75,240,149,288,154.7C336,160,384,96,432,64C480,32,528,32,576,48C624,64,672,96,720,138.7C768,181,816,235,864,245.3C912,256,960,224,1008,181.3C1056,139,1104,85,1152,90.7C1200,96,1248,160,1296,202.7C1344,245,1392,267,1416,277.3L1440,288L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768 ,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path>
    </svg>
    <!-- End Ombak -->

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col">
                    <h2 style="font-weight: bold;">About Me</h2>
                </div>
            </div>
            <div class="row" style="margin:5%; margin-bottom: 25px;">
                <?php
                $images = ["Bali.jpg", "dayak.jpg", "papua.jpg", "minangkabau.jpg", "jawa.jpg", "jambi.jpg"];
                foreach ($images as $image) {
                ?>
                <div class="col-md-2">
                    <div class="card mt-0" style="height: 15rem;">
                        <img src="../img/<?php echo $image; ?>" class="h-100 w-100 shadow" style="object-fit:cover; border: 2px solid black;" alt="Service Image">
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="row justify-content-center fs-5 text-center">
                <div class="col-md-5">
                    <div class="card" style="width: 25rem; height: 100%">
                        <div class="card-body shadow">
                            <h4 class="card-title" style="font-weight: bold;">Selamat datang di tempat persewaan baju adat kami.</h4>
                            <h5 class="card-text mt-4">Di sini tersedia baju adat dari beberapa daerah di Indonesia untuk anak-anak hingga dewasa. Harga bervariasi mulai dari Rp. 30.000 - Rp. 100.000. Pilihan baju adat lengkap mulai dari Jawa hingga Sumatra.</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card" style="width: 25rem;">
                        <div class="card-body shadow">
                            <h4 class="card-title" style="font-weight: bold;">Tersedia aksesori tradisional yang melengkapi tampilan Anda.</h4>
                            <h5 class="card-text mt-4">Penyewaan baju adat memudahkan Anda dalam merasakan budaya. Baju adat Indonesia adalah cerminan sejarah dan identitas. Anda bisa berfoto dalam balutan baju adat yang elegan. Baju adat adalah simbol keindahan dan keragaman Indonesia.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- Product Section -->
    <section id="product">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col">
                    <h2 style="font-weight: bold;">Product</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php
                $query = "SELECT * FROM product";
                $sql = mysqli_query($con, $query);
                if ($sql) {
                    while ($result = mysqli_fetch_assoc($sql)) {
                ?>
                <div class="col-md-4 mb-4">
                    <div class="card" style="border:2px solid black; border-radius: 15px;">
                        <img src="../img/<?php echo $result['foto_product']; ?>" class="card-img" alt="Product Image" style="border-bottom: 2px solid black; border-radius:12px;"/>
                        <div class="card-body">
                            <h5 class="card-title" style="font-weight:bold"><?php echo $result['judul']; ?></h5>
                            <hr>
                            <p class="card-text">
                                <strong>Tipe:</strong> <?php echo $result['tipe']; ?><br>
                                <strong>Sub Tipe:</strong> <?php echo $result['sub_tipe']; ?><br>
                                <strong>Deskripsi:</strong> <?php echo $result['deskripsi']; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php
                    }
                } else {
                    echo "Error: " . mysqli_error($con);
                }
                ?>
            </div>
            <div>
                <h6 style="color: red;"> *Note : Harap bertanya terlebih dahulu terkait ketersediaan produk ke admin,< a href="#admin" style="color: red; font-weight: bold;text-decoration:none;"> di sini! </a></h6>
            </div>
        </div>
    </section>
    <!-- End Product Section -->

    <!-- Contact Me Section -->
    <section id="contact">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col">
                    <h2 style="font-weight: bold;">Contact Me</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="send.php" method="post" target="_blank">
                        <div class="mb-3">
                            <i class="bi bi-person"></i>
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="name" aria-describedby="name" placeholder=" Contoh : Ilham Hilmi Hilmawan" />
                        </div>
                        <div class="mb-3">
                            <i class="bi bi-envelope-at"></i>
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" aria-describedby="email" placeholder="Contoh : ihash@gmail.com" required/>
                        </div>
                        <div class="mb-3">
                            <i class="bi bi-envelope"></i>
                            <label for="pesan" class="form-label">Deskripsi Pesanan</label>
                            <textarea class="form-control" name="pesan" rows="3" placeholder="Contoh : Pria/SMP/BajuAdatJawa" required></textarea>
                        </div>
                        <input type="hidden" name="noWa" value="+62895366247588">
                        <button type="submit" name="submit" class="btn btn-primary">Pesan</button>
                    </form>
                    <br>
                    <div>
                        <h6 style="color: red;"> *Note : Saat melakukan penyewaaan harap menyertakan tipe, sub tipe, dan judul</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Me Section -->

    <!-- Footer -->
    <section class="footer" id="admin">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col">
                    <h2 style="font-weight: bold;">CONNECT WITH US</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <ul class="social-icons">
                        <div class="col-md-2">
                            <div class="text-center">
                                <i class="bi bi-whatsapp" style="font-size: 1.5rem;"></i>
                                <p>WhatsApp: <a href="https://wa.me/+62895366247588/">@Admin</a></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="text-center">
                                <i class="bi bi-instagram" style="font-size: 1.5rem;"></i>
                                <p>Instagram: <a href="https://www.instagram.com/ilhamhilmih/">@ilhamhilmih</a></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="text-center">
                                <i class="bi bi-facebook" style="font-size: 1.5rem;"></i>
                                <p>Facebook: <a href="https://www.facebook.com/profile.php?id=100010695283844">@ilhamhilmih</a></p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="text-center">
                                <i class="bi bi-twitter" style="font-size: 1.5rem;"></i>
                                <p>Twitter: <a href="https://twitter.com/KimGu_1">@Admin</a></p>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="row text-center mt-4">
                <div class="col">
                    <iframe class="iframe-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15842.686214286547!2d112.23197994220124!3d-7.556947390118543!2m3!1f0!2f0!3f0!3m2!1i102 4!2i768!4f13.1!3m3!1m2!1s0x2dd6972a8d5f4313%3A0x17291f4163053f19!2sAlun%20Alun%20Jombang!5e0!3m2!1sen!2sid!4v1635333066828!5m2!1sen!2sid"></iframe>
                    <p>Hak Cipta © 2023 | Semua Hak Dilindungi</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>