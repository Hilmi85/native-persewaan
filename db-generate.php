<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="img/pohon.png">
    <title>Generate Database</title>
</head> 
<body class="container mt-5">
    <div class="jumbotron">
        <h2 class="display-4" style="font-weight: bold;">Generate Database</h2>
        <p class="lead ml-2">Projek PHP Native | Persewaan Baju Adat</p>
        <hr class="my-4">

<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    try {
        $mysqli = new mysqli("localhost", "root", "");

        // Buat database "test" (jika belum ada)
        $query = "CREATE DATABASE IF NOT EXISTS native_persewaan";
        $mysqli->query($query);
        if ($mysqli->error){
        throw new Exception($mysqli->error, $mysqli->errno);
        }
        else {
        echo "<li>Database 'native_persewaan' berhasil di buat / sudah tersedia</li>";
        };

        // Pilih database "test"
        $mysqli->select_db("native_persewaan");
        if ($mysqli->error){
        throw new Exception($mysqli->error, $mysqli->errno);
        }
        else {
        echo "<li>Database 'native_persewaan' berhasil di pilih</li>";
        };

        // Hapus tabel "penduduk" (jika ada)
        $query = "DROP TABLE IF EXISTS product";
        $mysqli->query($query);
        if ($mysqli->error){
        throw new Exception($mysqli->error, $mysqli->errno);
        }
        
        // Buat tabel "product"
        $query = "CREATE TABLE `product` (
            `id_product` varchar(255) NOT NULL PRIMARY KEY,
            `tipe` varchar(100) NOT NULL,
            `sub_tipe` varchar(100) NOT NULL,
            `judul` varchar(150) NOT NULL,
            `foto_product` varchar(255) NOT NULL,
            `deskripsi` varchar(255) NOT NULL
        )";
        $mysqli->query($query);
        if ($mysqli->error) {
            throw new Exception($mysqli->error, $mysqli->errno);
        } else {
            echo "<li>Tabel 'product' berhasil dibuat</li>";
        }

        // Isi tabel "product"
        $query = "INSERT INTO `product` (`id_product`, `tipe`, `sub_tipe`, `judul`, `foto_product`, `deskripsi`) VALUES
            (1, 'Baju Adat Wanita', 'SD, SMP, SMA', 'Baju Adat Bali', 'Bali.jpg', 'Baju adat Bali. Pakaian tradisional Indonesia. Indonesia traditional clothes.'),
            (6, 'Baju Adat Pria', 'SD, SMP, SMA', 'Baju Adat Jawa', 'p-jawa.jpg', 'Baju adat  Pria Jawa. Pakaian tradisional Indonesia. Indonesia traditional clothes.'),
            (8, 'Baju Pernikahan', 'Dewasa', 'Baju Pernikahan Adat Bali', 'nikah-bali.jpg', 'Baju Adat Pernikahan Bali. Pakaian tradisional Indonesia. Indonesia traditional clothes.'),
            (9, 'Baju Adat Wanita', 'SMA', 'Baju Adat Dayak', 'Dayak.jpg', 'Baju adat Dayak. Pakaian tradisional Indonesia. Indonesia traditional clothes.'),
            (10, 'Aksesoris', '-', 'Cincin', 'cincin.jpg', 'Aksesoris Cincin. Indonesia modern Aksesoris')";
        
        $mysqli->query($query);
        if ($mysqli->error) {
            throw new Exception($mysqli->error, $mysqli->errno);
        } else {
            echo "<li>Tabel 'product' berhasil diisi " . $mysqli->affected_rows . " baris data</li>";
        }

        // Hapus tabel "user" (jika ada)
        $query = "DROP TABLE IF EXISTS users";
        $mysqli->query($query);
        if ($mysqli->error){
        throw new Exception($mysqli->error, $mysqli->errno);
        }

        // Buat tabel "user"
        $query = "CREATE TABLE `users` (
        `id` bigint NOT NULL,
        `user_id` bigint NOT NULL,
        `user_name` varchar(100) NOT NULL,
        `password` varchar(100) NOT NULL,
        `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        $mysqli->query($query);
        if ($mysqli->error){
        throw new Exception($mysqli->error, $mysqli->errno);
        }
        else {
        echo "<li>Tabel 'users' berhasil di buat</li>";
        };

        // Isi tabel "user"
        $passwordAdmin = password_hash('rahasia',PASSWORD_DEFAULT);

        $query = "INSERT INTO `users` (`id`, `user_id`, `user_name`, `password`, `date`) VALUES
        (1, 9223372036854775807, 'admin', 'admin', '2023-12-07 17:16:06'),
        (2, 9223372036854775807, 'user', 'user', '2023-12-07 17:16:41')";

        $mysqli->query($query);
        if ($mysqli->error){
        throw new Exception($mysqli->error, $mysqli->errno);
        }
        else {
        echo "<li>Tabel 'users' berhasil di isi ".$mysqli->affected_rows."
            baris data</li>";
        };

        ?>

        <hr class="w-50 mx-auto">
        <p class="lead">Database berhasil dibuat, silahkan
        <a href="native/login.php">Login</a> 
        dengan username : <code>admin</code>, password : <code>admin</code>. Jika ingin login ke halaman admin.<br>
        Atau dengan username : <code>user</code>, password : <code>user</code>. Jika ingin login ke halaman user.<br>
        Atau <a href="native/signup.php">Register</a> 
        untuk membuat user baru</p>

        <?php
        }
        catch (Exception $e) {
            echo "<p>Koneksi / Query bermasalah: ".$e->getMessage().
            " (".$e->getCode().")</p>";
        }
        finally {
            if (isset($mysqli)) {
            $mysqli->close();
            }
        }
        ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>