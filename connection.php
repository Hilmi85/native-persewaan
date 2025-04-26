<?php
//objek koneksi
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "native_persewaan";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)) die("failed to connect!");

mysqli_select_db($con, $dbname);

$url = 'http:://localhost/native_persewaan/';
