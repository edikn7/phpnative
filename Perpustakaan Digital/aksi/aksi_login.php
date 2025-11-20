<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan config database
include '../config.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($config,"SELECT * FROM tbl_user WHERE username='$username' AND password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai Admin
	if($data['level']=="Admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "Admin";
		// alihkan ke halaman dashboard Admin
		header("location:../admin/dashboard_admin.php");
 
	// cek jika user login sebagai Pustakawan
	}else if($data['level']=="Pustakawan"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "Pustakawan";
		// alihkan ke halaman dashboard Pustakawan
		header("location:../dashboard_pustakawan.php");
 
	// cek jika user login sebagai Anggota
	}else if($data['level']=="Anggota"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "Anggota";
		// alihkan ke halaman dashboard Anggota
		header("location:../public/dashboard_anggota.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:../login.php?pesan=gagal");
	}	
}
 
?>