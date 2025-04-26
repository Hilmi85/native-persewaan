<?php

//untuk cek user sudah melakukan login
function check_login($con) {
	//kondisi apakah user id sudah di set/terdaftar
	if(isset($_SESSION['user_id']))
	{
		//var id akan diisi oleh id yang sudah diset. Ini adalah cara untuk mendapatkan ID pengguna yang masuk
		$id = $_SESSION['user_id'];
		//untuk membatasi, hanya satu baris data yang akan diambil/cocok
		$query = "select * from users where user_id = '$id' limit 1";
		//hasil query(permintaan informasi dr db) akan disimpan di var result
		$result = mysqli_query($con,$query);
		//memastikan bahwa pengguna dengan ID yang sesuai ada dalam database
		if($result && mysqli_num_rows($result) > 0)
		{
			//jika ada, data diambil dari db mnggunakan fetch_assoc dan disimpan di user data
			$user_data = mysqli_fetch_assoc($result);
			//mengembalikan data user, memungkinkan Anda untuk menggunakan data pengguna ini di halaman-halaman lain dalam aplikasi
			return $user_data;
		}
	}
	//mengarahkan ke login
	header("Location: login.php");
	die;
}

//Jadi, fungsi random_num digunakan untuk menghasilkan nomor acak dengan panjang yang ditentukan, dan jika panjang yang diminta kurang dari 5 karakter, panjangnya akan diatur menjadi 5 karakter minimal.
function random_num($length) {

	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) { 
		# code...

		$text .= rand(0,9);
	}

	return $text;
}
?>

