<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- FONTS GOOGLE -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!-- BOOTSTRAP ICON -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <!-- BOOTSTRAP TABEL -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

  <title>Data Mahasiswa</title>
</head>
<body>	

	<div class="container">
		<div class="row">
			<div class="col-md">
				<a href="<?= site_url('mahasiswa/tambahdata')?>" class="btn btn-primary"><i class="bi bi-person-plus-fill"></i>&nbsp;Tambah Mahasiswa</a>
			</div>
		</div>
		<div class="row my-5">
			<div class="col-md">
				<table id="example" class="table table-striped" style="width:100%">
		        <thead>
		            <tr>
		            	<th>No</th>
		                <th>NPM</th> 
						<th>Nama</th>
						<th>Prodi</th>
						<th>Angkatan</th>
						<th>Action</th>
		            </tr>
		        </thead>
		        <tbody>
		            <?php $no=0; foreach($tampildata as $siswa) : 
		            	$no++;
		            ?>
					<tr>
						<td><?= $no ?></td>
						<td><?php echo $siswa->npm; ?></td>
						<td><?php echo $siswa->nama; ?></td>
						<td><?php echo $siswa->prodi; ?></td>
						<td><?php echo $siswa->angkatan; ?></td>
						<td>
						<a class="btn btn-warning" ><i class="bi bi-arrow-clockwise">&nbsp;</i>Update</a>
			      		<a class="btn btn-danger" ><i class="bi bi-trash-fill">&nbsp;</i>Delete</a>
			      		</td>
					</tr>
					<?php endforeach; ?>
		        </tbody>
			</div>
		</div>
	</div>

	<!-- BOOTSTRAP -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

	<script>
		function hapus(npm) {
			pesan = confirm('Yakin hapus data mahasiswa ?');

			if(pesan){
				window.location.href = ("<?= site_url('mahasiswa/hapus/') ?>") + npm;
			} else return false;
		}
	</script>
</body>
</html>