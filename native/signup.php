<?php 
session_start();

	include("../connection.php");
	include("../functions.php");

	//pernyataan kondisional, memeriksa apakah permintaan yang sedang diproses adalah permintaan HTTP POST.
	if($_SERVER['REQUEST_METHOD'] == "POST") {
		// user mengisi form regist/daftar kemudian dikirim dng nama usernm/pass dan disimpan dlam var $user_name dan $passowrd
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		//memeriksa agar saat regist user dan pass tidak kosong, dan username bukan numerik
		if(!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
		//Kriteria ini digunakan untuk memastikan bahwa kedua bidang telah diisi dengan benar
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
			//memasukkan data user yang telah sesuai kriteria regist ke db agar bisa login

			mysqli_query($con, $query);//untuk menjalankan permntaan(query) SQL untuk menyimpan data baru ke db

			//jika sudah daftar dan melalui proses sebelumnya maka akan diarahkan ke laman login
			echo '<script>alert("Anda berhasil mendaftar!");window.location="login.php"</script>';
			die;
		}else{
			echo '<script>alert("Silahkan isi data dengan benar!");windows.location="signup.php"</script>';
		}
	}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../form-login/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../form-login/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../form-login/css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../form-login/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="../img/pohon.png">
    <title>Sign Up</title>
  </head>
  <body>
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="../img/indonesia.png" alt="Image" class="img-fluid" width="400" style="margin-left: 70px;">
          </div>
          <div class="col-md-6 contents">
            <div class="row justify-content-center">
              <div class="col-md-8">
                <div class="mb-4">
                <h3 style="font-weight: bold;">Sign Up</h3>
                <p class="mb-4">Buat username dan passoword terlebih dahulu agar bisa login</p>
              </div>
              <form action="#" method="post">
                <div class="form-group first">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" name="user_name">
                </div>
                <div class="form-group last mb-5" method="post">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password">  
                </div>
                <div class="d-flex">
                  <p style="color: black; ">Sudah punya akun?</p>
                  <a href="login.php" style="color:darkblue; margin-left: 5px; text-decoration:none;">Click to Login</a><br>
                </div>
                <input type="submit" method="post" value="Sign Up" class="btn btn-block btn-primary">
                <div style="margin-top: 5px;">
                  <a href="../index.php" type="button" class="btn btn-danger" style="text-decoration: none; width: 100%; color: white;">
                    <i class="fa fa-reply" aria-hidden="true"></i>
                    Batalkan
                  </a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="../form-login/js/jquery-3.3.1.min.js"></script>
    <script src="../form-login/js/popper.min.js"></script>
    <script src="../form-login/js/bootstrap.min.js"></script>
    <script src="../form-login/js/main.js"></script>

  </body>
</html>