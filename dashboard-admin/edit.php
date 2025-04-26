<?php
  include '../connection.php'; //untuk mengaitkan database dari folder koneksi.php

  $query = "SELECT * FROM product"; 
  $sql = mysqli_query($con, $query); //$conn untuk koneksi ke db dari folder koneksi.php
  $no = 0; //UNTUK MEMULAI NOMOR PADA TABEL/ ID PADA DB DARI NOL

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--Link Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- BOOTSRAP CSS --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- BOOTSRAP ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Font -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <link rel="icon" type="image/png" href="../img/pohon.png">
    <title>Dashboard-Admin</title>
  </head>
  <body>
  <nav class="navbar ml-4 pt-3">
      <div>
        <a class="navbar-brand" style="color: black; text-decoration: none;" href="index.php">
            <i class="bi bi-backspace-fill" style="font-size: 24px;"></i>
        </a>
      </div>
    </nav>
    <!-- JUDUL -->
    <div class="container">
      <h1 class="mt-4">Data Produk</h1>
      <figure>
        <blockquote class="blockquote">
          <p>Persewaan Baju Adat</p>
        </blockquote>
        <figcaption class="blockquote-footer">
          CRUD -
          <cite title="Source Title">Create, Read, Update, and Delete </cite>
        </figcaption>
      </figure>
      <a href="kelola.php" type="button" class="btn btn-primary mb-3">
        <i class="fa fa-plus"></i> Tambah Data
      </a>
      <!-- Tabel Data -->
      <div class="table-responsive">
        <table class="table align-middle table-hover table-bordered">
          <thead>
            <tr>
              <th>No.</th>
              <th>Tipe</th>
              <th>Sub Tipe</th>
              <th>Judul</th>
              <th>Image</th>
              <th>Deskripsi</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
              while($result = mysqli_fetch_assoc($sql)){ 
            ?>
<!-- UNTUK MENAMPILKAN DATA -->
                  <tr>
                      <td>
                        <center>
                          <?php echo ++$no; ?>.
                        </center>
                      </td>
                      <td>
                        <?php echo $result['tipe']; ?>
                      </td>
                      <td>
                        <?php echo $result['sub_tipe']; ?>
                      </td>
                      <td>
                        <?php echo $result['judul']; ?>
                      </td>
                      <td>
                        <img src="../img/<?php echo $result['foto_product']; ?>" style="width: 120px" />
                      </td>
                      <td>
                        <?php echo $result['deskripsi']; ?>
                      </td>
                      <td>
                        <a
                          href="kelola.php?ubah=<?php echo $result['id_product']; ?>" type="button" class="btn btn-success btn-sm">
                          <i class="fa fa-pencil"></i>
                        </a>
                        <a href="proses.php?hapus=<?php echo $result['id_product']; ?>" type="button" class="btn btn-danger btn-sm" onClick="return confirm('Yakin hapus data?')">
                          <i class="fa fa-trash"></i>
                        </a>
                      </td>
                  </tr>
            <?php
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
