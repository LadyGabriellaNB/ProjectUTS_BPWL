<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>SIPUS PCR</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<style>
		body {
			background-color: #B0C4DE;
		}
	</style>
	<div class="header">

		<h4>SIPUS PCR<br>Sistem Perpustakaan PCR</h4>
	</div>

	<form method="POST" action="cekpengguna.php">
		<a href="user/loginAPI/index.php"><img src="user/assets/images/logingoogle.png" width="456px"
				height="120px"></a>
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login<font color="black"></button>
		</div>

		<p>
			Ingin Bergabung? <a href="register.php">Daftar Sekarang</a>
		</p>
	</form>
</body>

</html>