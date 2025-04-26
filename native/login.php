<?php 
session_start();

	include("../connection.php");
	include("../functions.php");

    //pernyataan kondisional, memeriksa apakah permintaan yang sedang diproses adalah permintaan HTTP POST.
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        //login user mengisi form kemudian dikirim dng nama usernm/pass dan disimpan dlam var $user_name dan $passowrd
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        //memeriksa agar saat login user dan pass tidak kosong, dan username bukan numerik
        if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
      
            $query = "SELECT * FROM users WHERE user_name = '$user_name' LIMIT 1";
            $result = mysqli_query($con, $query);
      
              if ($result) {
                  //jika proses diatas terpenuhi, maka akan memanggil data dr db, apakah data yg diinputkan user ke form login ada di db, if ada maka brhasil
                  if ($result && mysqli_num_rows($result) > 0) {
                      $user_data = mysqli_fetch_assoc($result);
                      //jika user dan password cocok dgn yg sudah di regist dan terdapat di db, maka berhasil login
                      if ($user_data['password'] === $password) {
                          $_SESSION['user_id'] = $user_data['user_id']; //mengatur sebuah sesi (session) dengan nama 'user_id' dan nilai yang akan disimpan dalam sesi tersebut. Nilai yang disimpan adalah ID pengguna ($user_data['user_id']) yang sesuai dengan pengguna yang telah berhasil masuk.
                          // Check if the logged-in user is an admin
                          if ($user_name === 'admin') {
                              // Redirect admin to dashboard-admin/index.php
                              echo '<script>alert("Anda berhasil login sebagai admin");window.location="../dashboard-admin/index.php"</script>';
                          } else {
                              // Redirect regular user to index.php
                              echo '<script>alert("Anda berhasil login");window.location="index.php"</script>';
                          }
                      }
                  }
              }
        echo '<script>alert("Username dan passowrd yang anda masukkan salah!");windows.location="login.php"</script>';
        }else
        {
          echo '<script>alert("Silahkan isi username dan password terlebih dahulu!");windows.location="login.php"</script>';
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
    <title>Login</title>
  </head>
  <body>
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="../img/nusantara.png" alt="Image" class="img-fluid" width="450" style="margin-left: 50px;" >
          </div>
          <div class="col-md-6 contents">
            <div class="row justify-content-center">
              <div class="col-md-8">
                <div class="mb-4">
                <h3 style="font-weight:bold;">Login</h3>
                <p class="mb-4">Masukkan username dan password yang telah anda daftarkan</p>
              </div>
              <form action="#" method="post">
                <div class="form-group first">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" name="user_name">
                </div>
                <div class="form-group last mb-4" method="post">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password">               
                </div>             
                <div class="d-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                    <input type="checkbox" checked="checked"/>
                    <div class="control__indicator"></div>
                  </label>
                </div>
                <div class="d-flex">
                  <p style="color: black; ">Belum punya akun?</p>
                  <a href="signup.php" style="color:darkblue; margin-left: 5px; text-decoration:none;">Click to Sign Up</a><br>
                </div>
                <input type="submit" method="post" value="Log In" class="btn btn-block btn-primary"></input>
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