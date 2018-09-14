<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Bangun Datar</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	
	<!-- Custom Style -->
	<style>
		.menu {
			width: 600px;
			margin: 0 auto;
			margin-top: 150px;
		}

		.btn-bangun-datar {
			padding: 5px;
		}
		
		#hasil, #error {
			width: 100%;
			padding: 5px;
		}

		.submit-option {
			width: 150px;
			margin: 0 auto;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="menu row">
			<div class="btn-bangun-datar col-md-12">
				<h3 class="text-center">Bangun Datar</h3>
			</div>
			<div class="btn-bangun-datar col-md-12">
				<a href="index.php" class="btn btn-primary btn-block">Home</a>
			</div>
			<div class="btn-bangun-datar col-md-4">
				<button class="btn btn-info btn-block" data-toggle="modal" data-target="#persegiModal">Persegi</button>
			</div>
			<div class="btn-bangun-datar col-md-4">
				<button class="btn btn-info btn-block" data-toggle="modal" data-target="#persegiPanjangModal">Persegi Panjang</button>
			</div>
			<div class="btn-bangun-datar col-md-4">
				<button class="btn btn-info btn-block" data-toggle="modal" data-target="#lingkaranModal">Lingkaran</button>
			</div>
			<div class="btn-bangun-datar col-md-6">
				<button class="btn btn-info btn-block" data-toggle="modal" data-target="#belahKetupatModal">Belah Ketupat</button>
			</div>
			<div class="btn-bangun-datar col-md-6">
				<button class="btn btn-info btn-block" data-toggle="modal" data-target="#segitigaModal">Segitiga</button>
			</div>
			
			<?php if (!is_null($hasil)): ?>
			<div id="hasil">
				<div class="alert alert-success text-center">
					<?= $hasil ?>
				</div>
			</div>
			<?php endif ?>
			<?php if (!is_null($error)): ?>
			<div id="error">
				<div class="alert alert-danger text-center">
					<?= $error ?>
				</div>
			</div>
			<?php endif ?>
		</div>
	</div>

	<?php include 'modal.php'; ?>

	<!-- jQury, Popper, Bootstrap JS -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>