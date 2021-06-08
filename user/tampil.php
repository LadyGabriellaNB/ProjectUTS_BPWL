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
			<font size="6">Mahasiswa Anggota Perpustakaan</font>
		</center>
		<hr>
		<?php

include '../admin/model/database.php';
$db = new database ();
?>

		<div class="table-responsive">
			<table class="table table-striped jambo_table bulk_action">
				<thead>
					<tr>
						<th> No.</th>
						<th> NIM</th>
						<th> Nama Mahasiswa</th>
						<th> Email</th>
						<th> Program Studi</th>
					</tr>
				</thead>

				<?php 
				
			$no = 1;
			foreach ($db->tampil() as $x) { 
				 ?>
				<tr>
					<td><?php echo $no++?></td>
					<td><?php echo $x['nim']?></td>
					<td><?php echo $x['nama']?></td>
					<td><?php echo $x['email']?></td>
					<td><?php echo $x['prodi']?></td>
				</tr>
				<?php 
		}
		 ?>
			</table>
		</div>
	</div>
</body>

</html>