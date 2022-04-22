<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Visit Baturraden</title>
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-secondary sticky-top">
		<div class="container">
			<a class="navbar-brand text-white font-weight-bold" href="<?= base_url() ?>">Visit Baturraden</a>
			<button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse d-sticky d-lg-flex justify-content-end" id="navbarSupportedContent">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link text-white" href="<?= base_url() ?>">Beranda <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link text-white" href="<?= base_url('wisata') ?>">Tempat Wisata</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-white" href="<?= base_url('reservasi') ?>">Reservasi</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-white" href="<?= base_url('daftar_pesanan') ?>">Daftar Pemesan</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container py-4">
		<div class="row">
			<?php foreach($wisata as $data): ?>
				<div class="col-12 col-md-6 col-lg-4">
					<div class="card">
						<img src="<?= base_url('assets/img/'.$data->image) ?>" class="card-img-top" alt="image">
						<div class="card-body">
							<h5 class="card-title text-center"><?= $data->name ?></h5>
							<p class="card-text text-truncate"><?= $data->desc ?></p>
							<a href="<?= base_url('wisata/'.$data->id_wisata) ?>" class="btn btn-primary col-12">Lihat Selengkapnya</a>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>

	<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>