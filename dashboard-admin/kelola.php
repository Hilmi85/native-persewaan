<!DOCTYPE html>

<?php
  include '../connection.php';

    $id_product = '';  
    $tipe = '';
    $sub_tipe = '';
    $judul = '';
    $deskripsi = '';

  if(isset($_GET['ubah'])){
    $id_product = $_GET['ubah'];

    $query = "SELECT * FROM product WHERE id_product = '$id_product';";
    $sql = mysqli_query($con, $query);

    $result = mysqli_fetch_assoc($sql);

    $tipe = $result['tipe'];
    $sub_tipe = $result['sub_tipe'];
    $judul = $result['judul'];
    $deskripsi = $result['deskripsi'];
  }
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Link Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Font -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <link rel="icon" type="image/png" href="../img/pohon.png">
    <title>Dashboard-Admin</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light mb-4">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"> Dashboard - Admin </a>
      </div>
    </nav>
    <div class="container">
      <form method="POST" action="proses.php" enctype="multipart/form-data">
        <input type="hidden" value="<?php echo $id_product; ?>" name="id_product">
        <div class="mb-3 row">
          <label for="tipe" class="col-sm-2 col-form-label">Tipe</label>
          <div class="col-sm-10">
            <input required type="text" name="tipe" class="form-control" id="tipe" placeholder="Cth: Baju Adat Pria" value="<?php echo $tipe; ?>"/>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="sub_tipe" class="col-sm-2 col-form-label">Sub Tipe</label>
          <div class="col-sm-10">
            <input type="text" name="sub_tipe" class="form-control" id="sub_tipe" placeholder="Cth: SMP" value="<?php echo $sub_tipe; ?>"/>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="judul" class="col-sm-2 col-form-label">Judul</label>
          <div class="col-sm-10">
            <input required type="text" name="judul" class="form-control" id="judul" placeholder="Cth: Baju Adat Bali" value="<?php echo $judul; ?>"/>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="foto" class="col-sm-2 col-form-label">Foto Product</label>
          <div class="col-sm-10">
              <input <?php if(!isset($_GET['ubah'])){echo 'required';}?> class="form-control" type="file" name="foto" id="foto" accept="image/*"/>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
          <div class="col-sm-10">
              <textarea required class="form-control" id="deskripsi" name="deskripsi" rows="3"><?php echo $deskripsi; ?></textarea>
          </div>
        </div>
        <div class="mb-3 row mt-4">
          <div class="col">
            <?php
              if(isset($_GET['ubah'])){
            ?>
                <button type="submit" name="aksi" value="edit" class="btn btn-primary">
                  <i class="fa fa-floppy-o" aria-hidden="true"></i>
                  Simpan Perubahan
                </button>
            <?php
             } else {
            ?>
                <button type="submit" name="aksi" value="add" class="btn btn-primary">
                  <i class="fa fa-floppy-o" aria-hidden="true"></i>
                  Tambahkan
                </button>
            <?php
             } 
            ?>
              <a href="edit.php" type="button" class="btn btn-danger">
                  <i class="fa fa-reply" aria-hidden="true"></i>
                  Batalkan
              </a>
          </div>
      </form>
    </div>
  </body>
</html>
