<?php
include "koneksi.php";
$kd_guru=$_POST['kd_guru'];
$nip=$_POST['nip'];
$nama_guru=$_POST['nama_guru'];
$jenkel=$_POST['jenkel'];
$alamat=$_POST['alamat'];
$no_telpon=$_POST['no_telpon'];
$status_aktif=$_POST['status_aktif'];
$sql="INSERT INTO tb_guru VALUES ('$kd_guru','$nip','$nama_guru','$jenkel','$alamat','$no_telpon','$status_aktif')";
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