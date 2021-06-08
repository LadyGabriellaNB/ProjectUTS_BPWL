<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class="container" style="margin-top:20px">
		<center>
			<font size="6">Data Mahasiswa Anggota Perpustakaan</font>
		</center>
		<hr>
		<?php

include '../model/database.php';
$db = new database ();
?>
		<a href="../view/index.php?page=tambah"><button class="btn btn-dark right">Tambah Data</button></a>

		<div class="table-responsive">
			<table class="table table-striped jambo_table bulk_action">
				<thead>
					<tr>
						<th>No.</th>
						<th>NIM</th>
						<th>Nama Mahasiswa</th>
						<th>Email</th>
						<th>Program Studi</th>
						<th>Aksi</th>
					</tr>
				</thead>

				<?php 
				
			$no = 1;
			foreach ($db->tampil() as $d) { 
				 ?>
				<tr>
					<td><?php echo $no++?></td>
					<td><?php echo $d['nim']?></td>
					<td><?php echo $d['nama']?></td>
					<td><?php echo $d['email']?></td>
					<td><?php echo $d['prodi']?></td>
					<td>

						<a href="../view/index.php?page=update" <?php echo $d['nim']; ?>&aksi=edit"><button
								class="btn btn-secondary btn-sm">
								<font color=white>Edit</a>
						<a href="../controller/proses.php?nim=<?php echo $d['nim']; ?>&aksi=delete"><button
								class="btn btn-danger btn-sm"
								onclick="return confirm(\'Yakin ingin menghapus data ini?\')'">
								<font color=white>Delete</a>

					</td>
				</tr>
				<?php 
		}
		 ?>
			</table>
		</div>
	</div>
</body>

</html>