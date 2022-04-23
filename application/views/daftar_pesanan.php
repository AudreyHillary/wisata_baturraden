<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Visit Baturraden</title>
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
	<script src="<?= base_url('assets/js/chart.min.js') ?>"></script>
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
					<li class="nav-item">
						<a class="nav-link text-white" href="<?= base_url('wisata') ?>">Tempat Wisata</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-white" href="<?= base_url('reservasi') ?>">Reservasi</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link text-white" href="<?= base_url('daftar_pesanan') ?>">Daftar Pemesan</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container py-4">
		<div class="row">
			<h2 class="col-12 pb-4 text-center text-success">Grafik Total Harga Per Hari</h2>
			<div class="col-12 pb-4 text-center">
				<canvas id="myChart" height="80px"></canvas>
				<?php
				//Inisialisasi nilai variabel awal
				$kunjungan = "";
				$jumlah = null;
				$pemesan = null;
				foreach ($pesanan['grafik'] as $grafik) {
					$kunj = $grafik->kunjungan;
					$kunjungan .= "'$kunj'" . ", ";
					$jum = $grafik->total_harga_pesanan;
					$jumlah .= "$jum" . ", ";
					$pem = $grafik->total_pemesan;
					$pemesan .= "$pem" . ", ";
				}
				?>
			</div>
		</div>
	</div>
	<div class="container py-4">
		<div class="row">
			<h2 class="col-12 pb-4 text-center text-success">Daftar Pesanan</h2>
			<div class="table-responsive">
				<table class="table table-striped table-responsive-md">
					<thead>
						<tr>
							<th>#</th>
							<th>Nama</th>
							<th>No. Identitas</th>
							<th>Wisata</th>
							<th>Total Price</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 1;
						foreach ($pesanan['table'] as $data) {
						?>
							<tr>
								<th><?= $i ?></th>
								<td><?= $data->name ?></td>
								<td><?= $data->no_identitas ?></td>
								<td><?= $data->wisata ?></td>
								<td><?= "Rp " . number_format($data->total_harga, 0, ",", "."); ?></td>
								<td>
									<a class="btn btn-success" href="<?= base_url('daftar_pesanan/' . $data->id_pesanan) ?>">
										Detail
									</a>
								</td>
							</tr>
						<?php
							$i++;
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
	<script>
		var ctx = document.getElementById('myChart').getContext('2d');
		var chart = new Chart(ctx, {
			// The type of chart we want to create
			type: 'bar',
			// The data for our dataset
			data: {
				labels: [<?php echo $kunjungan; ?>],
				datasets: [{
					label: 'Data Total Harga ',
					backgroundColor: ['rgba(56, 86, 255, 0.87)'],
					borderColor: ['rgba(56, 86, 255, 0.87)'],
					data: [<?php echo $jumlah; ?>]
				},
				// {
				// 	label: 'Data Total Pemesan ',
				// 	backgroundColor: ['rgb(255, 99, 132)'],
				// 	borderColor: ['rgb(255, 99, 132)'],
				// 	data: [<?php echo $pemesan; ?>]
				// },
			]
			},
			// Configuration options go here
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});
	</script>
</body>

</html>
