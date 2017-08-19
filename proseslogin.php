<?php

	include 'config/koneksi.php';

	$username = $_POST['username'];
	$password = $_POST['password'];
	$password = md5($password);

	$cek = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
	$query = mysqli_query($db,$cek);

	$hasil = mysqli_fetch_array($query);

	if(count($hasil) == 0){




	}else{
		$_SESSION['username'] = $username;
		header('location:index_admin.php');
	}

	?>