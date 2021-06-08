<?php 
	include "../model/database2.php";
	$db2 = new database2();

	$aksi = $_GET['aksi'];

	if ($aksi == "tambahbuku") {
		$db2->tambahbuku($_POST['judul'], $_POST['penerbit'], $_POST['tanggal']);		
		header("location:../view/index.php?page=tampilbuku");
	}elseif ($aksi == "deletebuku") {
    $db2->deletebuku($_GET['kode']);
    header("location:../view/index.php?page=tampilbuku");
	}elseif ($aksi == "updatebuku") {
		$db2->updatebuku($_POST['kode'], $_POST['judul'], $_POST['penerbit'], $_POST['tanggal']);
		header("location:../view/index.php?page=tampilbuku");
	}
 ?>