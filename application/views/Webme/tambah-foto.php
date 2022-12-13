<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<title>Tambah Foto</title>
</head>
<style>
	body {
		background-color: skyblue;
	}
</style>

<body>
	<div class="container">
		<?= $this->session->flashdata('message'); ?>

		<h5>Form Tambah Foto</h5>
		<form action="<?php echo site_url('Webme/uploadFoto') ?>" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>Label</label>
				<input type="text" name="label" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Uraian</label>
				<textarea name="description" id="description" class="form-control" style="height: 100px;" required></textarea>
			</div>
			<div class="form-group">
				<label>Foto</label>
				<input type="file" name="file_foto" class="form-control">
			</div>
			<button type="submit" class="btn btn-success">Simpan</button>
		</form>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>