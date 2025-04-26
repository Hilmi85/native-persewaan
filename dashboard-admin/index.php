<?php
session_start();
include '../connection.php';
include '../functions.php';

//untuk mengmil fungsi cek login yg sdh terdfinisikn di function.php
$user_data = check_login($con);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- BOOTSRAP CSS --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- BOOTSRAP ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- KOMPONEN PAGE ADMIN -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="http://localhost/native-persewaan/dashboard-admin/css/style.css">
    <link rel="stylesheet" href="../style/indexAdmin.css">
    <link rel="icon" type="image/png" href="../img/pohon.png">
    <title>Dashboard Admin</title>
  </head>
  <body style="background-color: white;">
		<div class="wrapper d-flex align-items-stretc">
			<nav id="sidebar" class=" bg-transparent" style="color: black; border-right: 10px solid black; border-radius: 150px;">
				<div class="p-4 pt-4">
		  		<a href="#" class="img logo ml-4">
            <img src="../img/pohon2.png" alt="" width="180" height="130">
          </a>
          <hr class="mt-5">
          <h5 class="mb-3" style="font-weight: bold; color:black;"> Dashboard Admin</h5>
	        <ul class="list-unstyled components" style="margin-bottom: 150px;">
	          <li>
              <a href="edit.php" style="color:black;"> Edit Product</a>  
	          </li>
	          <li>
              <a href="#" style="color:black;"> Informasi </a>
	          </li>
	          <li>
              <a href="../native/logout.php" style="color:black;"> Logout</a>
	          </li>
	        </ul>
	        <div class="footer">
	        	<small style="color:black;">
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved. Made with <i class="bi bi-balloon-heart-fill"></i> by <a href="https://www.instagram.com/ilhamhilmih/" target="_blank" style="font-weight: bold; color: blue">ilhamhilmih</a>
						</small>
	        </div>
        </div>
    	</nav>
      <!-- Page Content Navbar Top  -->
      <div id="content" class="p-4 p-md-5">
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent shadow">
          <div class="container-fluid">
            <button type="button" id="sidebarCollapse" class="btn btn-dark">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
        </nav>        
        <h4 class="mb-4" style="font-weight: bold;"> Riwayat Pesanan</h4>
        <div class="row">
          <div class="col-xl-3 col-md-6" >
            <div class="card bg-primary text-white mb-4" style="border: 1px solid black; border-radius: 5px;">
              <a href="#" class="card-body"><i class="bi bi-bag-fill"></i> Pesanan Masuk</a>
                <div class="card-footer d-flex align-items-center justify-content-between"> 
                </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4" style="border: 1px solid black; border-radius: 5px;">
              <a href="#" class="card-body"><i class="bi bi-bag-fill"></i> Diproses</a>
                <div class="card-footer d-flex align-items-center justify-content-between">
                </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4" style="border: 1px solid black; border-radius: 5px;">
              <a href="#" class="card-body"><i class="bi bi-bag-fill"></i> Pesanan Selesai</a>
                <div class="card-footer d-flex align-items-center justify-content-between">
                </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4" style="border: 1px solid black; border-radius: 5px;">
              <a href="#" class="card-body"><i class="bi bi-bag-fill"></i> Dibatalkan</a>
                <div class="card-footer d-flex align-items-center justify-content-between">
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>