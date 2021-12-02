<?php
$host="localhost";
$username="root";
$password="";
$database="db_du";
$konek=mysqli_connect($host,$username,$password,$database);
	if($konek){
		echo "Koneksi berhasil";
	}else{
		echo "Koneksi gagal";
	}
?>