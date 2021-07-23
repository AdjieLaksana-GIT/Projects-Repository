<?php
include "connection.php";
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
if (empty($nama)){
echo "<script>alert('Nama belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else 
if(empty($username)){
echo "<script>alert('Username belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else 
if (empty($password)){
echo "<script>alert('Password belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else{
echo "<script>alert('Success')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
}


 
	// kondisi untuk menambahkan ke database
	if(isset($_POST['submit'])) {
		$nama_ = $_POST['nama'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		// koneksi databasenya
		include_once("config.php");
				
		// memasukan ke database user
		$result = mysqli_query($mysqli, "INSERT INTO user(nama,username,password) VALUES('$nama','$username','$password')");
		
		// menampilkan pesan jika berhasil menambahkan data
		echo "User added successfully";
    }


?>