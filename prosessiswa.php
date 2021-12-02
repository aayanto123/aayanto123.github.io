<?php
include "koneksi.php";
$kd_siswa=$_POST['kd_siswa'];
$nis=$_POST['nis'];
$nama_siswa=$_POST['nama_siswa'];
$jenkel=$_POST['jenkel'];
$agama=$_POST['agama'];
$tempat_lahir=$_POST['tempat_lahir'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$alamat=$_POST['alamat'];
$no_telp=$_POST['no_telp'];
$foto=$_POST['foto'];
$tahun_angkatan=$_POST['tahun_angkatan'];
$status=$_POST['status'];
$sql="INSERT INTO tb_siswa VALUES ('$kd_siswa','$nis','$nama_siswa','$jenkel','$agama','$tempat_lahir','$tanggal_lahir','$alamat','$no_telp','$foto','$tahun_angkatan','$status')";
$query=mysqli_query($konek,$sql);
if ($query) {
	echo "<br> koneksi berhasil nich";
} else {
	echo "yah kok gagal sih";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div>
	<ul>
		<li><a href=index.html>Back To Home</a></li>
	</ul>
</div>
</body>
</html>

