 <?php 
include('../model/database.php'); 
?>

 <center>
 	<font size="6">Tambah Data Anggota Perpustakaan</font>
 </center>
 <hr>


 <form action="../controller/proses.php?aksi=tambah" method="post">

 	<div class="item form-group">
 		<label class="col-form-label col-md-3 col-sm-3 label-align">NIM</label>
 		<div class="col-md-6 col-sm-6 ">
 			<input type="text" name="nim" class="form-control" size="4" required>
 		</div>
 	</div>
 	<div class="item form-group">
 		<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Mahasiswa</label>
 		<div class="col-md-6 col-sm-6">
 			<input type="text" name="nama" class="form-control" required>
 		</div>
 	</div>
 	<div class="item form-group">
 		<label class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
 		<div class="col-md-6 col-sm-6 ">
 			<input type="text" name="email" class="form-control" required>
 		</div>
 	</div>
 	<div class="item form-group">
 		<label class="col-form-label col-md-3 col-sm-3 label-align">Program Studi</label>
 		<div class="col-md-6 col-sm-6">
 			<select name="prodi" class="form-control" required>
 				<option value="">Pilih Program Studi</option>
 				<option value="Teknik Informatika">Teknik Informatika</option>
 				<option value="Teknik Komputer">Teknik Komputer</option>
 				<option value="Sistem Informasi">Sistem Informasi</option>
 				<option value="Teknik Elektronika">Teknik Elektronika</option>
 				<option value="Akuntansi">Akuntansi</option>
 				<option value="Teknik Listrik">Teknik Listrik</option>
 				<option value="Teknik Mesin">Teknik Mesin</option>
 				<option value="Teknik Mekatronika">Teknik Mekatronika</option>
 				<option value="Teknik Telekomunikas">Teknik Telekomunikasi</option>
 				<option value="Teknik Elektronika Telekomunikasi">Teknik Elektronika Telekomunikasi</option>
 			</select>
 		</div>
 	</div>
 	<div class="item form-group">
 		<div class="col-md-6 col-sm-6 offset-md-3">
 			<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
 			<a href="index.php?page=tampil_mhs" class="btn btn-warning">Kembali</a>
 		</div>
 		<a href="../view/index.php?page=tampil_mhs"></a>
 </form>
 </div>