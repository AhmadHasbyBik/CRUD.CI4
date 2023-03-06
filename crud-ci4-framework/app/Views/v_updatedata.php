<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
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

  <link href="<?php echo base_url();?>assets/css.css" rel="stylesheet">
  <title>Form Mahasiswa</title>
</head>
<body>
	<div class="container">
		<div class="row my-3">
			<div class="col-md">
				<h1> <i class="bi bi-person-plus-fill"></i>Edit Data</h1>	
			</div>
			<hr>			
		</div>
		<div class="row mb-3">
			<div class="col-md">
				<?= form_open('mahasiswa/simpanupdatedata') ?>
					<div class="mb-3">
						<p>NPM</p>
						<input type="text" name="npm" class="form-control" readonly value="<?= $npm ?>">
					</div>
					<div class="mb-3">
						<p>Nama</p>
						<input type="text" name="nama" class="form-control" value="<?= $nama ?>">
					</div>
					<div class="mb-3">
						<p>Prodi</p>
						<select name="prodi" class="form-select" aria-label="Default select example">
							<option selected disabled>Pilih Jurusan Anda</option>
							<option value="INFORMATIKA">INFORMATIKA</option>
							<option value="SAINS DATA">SAINS DATA</option>
							<option value="AGRIBISNIS">AGRIBISNIS</option>
							<option value="AL QURAN">AL QURAN</option>
							<option value="HADITS">HADITS</option>
							<option value="SISTEM INFORMASI">SISTEM INFORMASI</option>
							<option value="BISNIS">BISNIS</option>
							<option value="KIMIA">KIMIA</option>
							<option value="FISIKA">FISIKA</option>
							<option value="BIOLOGI">BIOLOGI</option>
						</select>
					</div>
					<div class="mb-3">
						<p>Angkatan</p>
						<select name="angkatan" class="form-select" aria-label="Default select example">
							<option selected disabled>Pilih Angkatan Anda</option>
							<option value="2021">2021</option>
							<option value="2020">2020</option>
							<option value="2019">2019</option>
							<option value="2018">2018</option>
							<option value="2017">2017</option>
							<option value="2016">2016</option>
							<option value="2015">2015</option>
						</select>
					</div>
					<br><hr>
					<input type="submit" value="simpan" class="btn btn-primary">
				<?= form_close(); ?>
			</div>
		</div>
	</div>

</body>
</html>