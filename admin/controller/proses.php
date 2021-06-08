<?php 
	include "../model/database.php";
	$db = new database();

	$aksi = $_GET['aksi'];

	if ($aksi == "tambah") {
		$db->tambah($_POST['nama'], $_POST['email'], $_POST['prodi']);		
		header("location:../view/index.php?page=tampil_mhs");
	}elseif ($aksi == "delete") {
		$db->delete($_GET['nim']);
		header("location:../view/index.php?page=tampil_mhs");
	}
	elseif ($aksi == "update") {
		$db->update($_POST['nim'], $_POST['nama'], $_POST['email'], $_POST['prodi']);
		header("location:../view/index.php?page=tampil_mhs");
	}
 ?>