<?php 
session_start();
include ('koneksi.php');

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($con,"select * from users where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);



if($cek > 0){
	$data = mysqli_fetch_assoc($login);

	if($data['level'] == "admin"){
		$data['username'] == $username; 
		$data['level'] == 'admin';
		
		header('location:../ProjectUTS_Lady/admin/view/index.php');
		// echo "	<script>
		// alert('Selamat Datang $username');
		// location.href='homeadmin.php';
		// </script>";
	}else if($data['level']  == "user"){
		$data['username'] == $username;
		$data['level'] == 'user';

		header('location:../ProjectUTS_Lady/user/index.php');
		
	}
}else{
	?>
<script>
	alert("Data Tidak Ditemukan Silahkan lakukan Registrasi");
	location.href = "login.php";
</script>
<?php
}
?>