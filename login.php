<?php
session_start();

include'koneksi.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman login</title>
		
		 <link rel="stylesheet" href="style.css">
</head>
<body>

<h2 align ="center">Halaman Login</h2>
 <div class="box-login">
<form action="" method="post">
	<ul>
		<li>
			<label for="username" > username :</label>
			<input type="text" name="username" id="username">
		</li>
		<li>
			<label for="password" > Password :</label>
			<input type="password" name="password" id="password">
		</li>
		<li>
			<button type="submit" name="flogin" >login</button>
		</li>
	</ul>


</form>
</div> 
<?php
if (isset($_POST['flogin']) ) {
	$username = $_POST["username"];
	$password = $_POST["password"];
	$cek = mysqli_query($konek,"SELECT * FROM user WHERE username='$username'");

	$no=mysqli_num_rows($cek);
	if ($no==1) {
	$_SESSION['userweb']=$username;
		header("location:index.html");
		exit;
	} else{
	echo "maaf username dan password salah";
}
}
?>
</body>
</html>