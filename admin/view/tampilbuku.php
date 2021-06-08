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
			<font size="6">Data Peminjaman Buku</font>
		</center>
		<hr>
		<?php

include '../model/database2.php';
$db2 = new database2 ();
?>
		<a href="../view/index.php?page=tambahbuku"><button class="btn btn-dark right">Tambah Data</button></a>

		<div class="table-responsive">
			<table class="table table-striped jambo_table bulk_action">
				<thead>
					<tr>
						<th>No.</th>
						<th>Kode Buku</th>
						<th>Judul Buku</th>
						<th>Penerbit Buku</th>
						<th>Tanggal Peminjaman</th>
						<th>Aksi</th>
					</tr>
				</thead>

				<?php 
				
			$no = 1;
			foreach ($db2->tampilbuku() as $x) { 
				 ?>
				<tr>
					<td><?php echo $no++?></td>
					<td><?php echo $x['kode']?></td>
					<td><?php echo $x['judul']?></td>
					<td><?php echo $x['penerbit']?></td>
					<td><?php echo $x['tanggal']?></td>
					<td>
						<a href="../view/index.php?page=updatebuku" <?php echo $x['kode']; ?>&aksi=editbuku"><button
								class="btn btn-secondary btn-sm">
								<font color=white>Edit</a>
						<a href="../controller/proses2.php?kode=<?php echo $x['kode']; ?>&aksi=deletebuku"><button
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