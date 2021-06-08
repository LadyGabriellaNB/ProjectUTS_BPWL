<?php
//including the database connection file
include("database2.php");

//getting id of the data from url
$kode = $_GET['kode'];

//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM buku WHERE kode=$kode");

//redirecting to the display page (index.php in our case)
header("location:../view/index.php");
		if($del){
			echo '<script>alert("Berhasil menghapus data."); document.location="index.php?page=tampilbuku";</script>';
		}else{
			echo '<script>alert("Gagal menghapus data."); document.location="index.php?page=tampilbuku";</script>';
		}
	}else{
		echo '<script>alert("ID tidak ditemukan di database."); document.location="index.php?page=tampilbuku";</script>';
	}
}else{
	echo '<script>alert("ID tidak ditemukan di database."); document.location="index.php?page=tampilbuku";</script>';
}

?>