<?php
//Untuk fungsi 'Tambah Data', 'Edit Data', 'Hapus Data'
    include '../connection.php';
    require 'kelola.php';

    //PERCABANGAN ADD DAN EDIT
    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "add"){//JIKA POST AKSI = ADD, MAKA TAMBAH DATA

            $tipe = $_POST['tipe'];
            $sub_tipe = $_POST['sub_tipe'];
            $judul = $_POST['judul'];
            $foto =  $_FILES['foto']['name'];
            $deskripsi = $_POST['deskripsi'];
            
            $dir = "../img/";
            $tmpFile = $_FILES['foto']['tmp_name'];

            move_uploaded_file($tmpFile, $dir.$foto); //UNTUK INPUT IMG DARI LUAR KE DALAM FOLDER IMG
            
            $id_product = uniqid();
            $query = "INSERT INTO product VALUES('$id_product', '$tipe', '$sub_tipe', '$judul', '$foto', '$deskripsi')";
            $sql = mysqli_query($con, $query);
            
            if($sql){
                header("location: edit.php");
            } else {
                echo $query;
            }

        } else if($_POST['aksi'] == "edit"){ //JIKA POST AKSI = EDIT, MAKA EDIT DATA

            $id_product = $_POST['id_product'];
            $tipe = $_POST['tipe'];
            $sub_tipe = $_POST['sub_tipe'];
            $judul = $_POST['judul'];
            $deskripsi = $_POST['deskripsi'];

            $queryShow = "SELECT * FROM product WHERE id_product = '$id_product';";
            $sqlShow = mysqli_query($con, $queryShow);
            $result = mysqli_fetch_assoc($sqlShow);

            if($_FILES['foto']['name'] == ""){
                $foto = $result['foto_product'];
            } else {
                $foto = $_FILES['foto']['name'];
                unlink("../img/". $result['foto_product']);
                move_uploaded_file($_FILES['foto']['tmp_name'], '../img/' .$_FILES['foto']['name']);
            }

            $query = "UPDATE product SET tipe='$tipe', sub_tipe='$sub_tipe', judul='$judul', deskripsi='$deskripsi', foto_product='$foto' WHERE id_product='$id_product';";
            $sql = mysqli_query($con, $query);
            header("location: edit.php");
            
        }
    }

    //HAPUS DATA
    if(isset($_GET['hapus'])){
        $id_product = $_GET['hapus'];

        $queryShow = "SELECT * FROM product WHERE id_product = '$id_product';";
        $sqlShow = mysqli_query($con, $queryShow);
        $result = mysqli_fetch_assoc($sqlShow);

        unlink("../img/". $result['foto_product']);//JIKA DATA DI HAPUS DARI DB, MAKA IMG DI FOLDER IMG/ JUGA OTOMATIS TERHAPUS

        $query = "DELETE FROM product WHERE id_product = '$id_product';";
        $sql = mysqli_query($con, $query);

        if($sql){    
            header("location: edit.php");    
        } else {
            echo $query;
        }

    }
?>