<?php
//including the database connection file
include("database.php");

//getting id of the data from url
$nim = $_GET['nim'];

//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM users WHERE nim=$nim");

//redirecting to the display page (index.php in our case)
header("location:../view/index.php");
		if($del){
			echo '<script>alert("Berhasil menghapus data."); document.location="index.php?page=tampil_mhs";</script>';
		}else{
			echo '<script>alert("Gagal menghapus data."); document.location="index.php?page=tampil_mhs";</script>';
		}
	}else{
		echo '<script>alert("ID tidak ditemukan di database."); document.location="index.php?page=tampil_mhs";</script>';
	}
}else{
	echo '<script>alert("ID tidak ditemukan di database."); document.location="index.php?page=tampil_mhs";</script>';
}

?>