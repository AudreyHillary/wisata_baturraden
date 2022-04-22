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
					<li class="nav-item">
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
            <h2 class="col-12 pb-4 text-center text-success">Detail Pesanan</h2>
            <table class="table table-striped table-responsive-md">
                <tr>
                    <th>Nama Pemesan</th>
                    <td>:</td>
                    <td><?= $pesanan->name ?></td>
                </tr>
                <tr>
                    <th>Nomor Identitas</th>
                    <td>:</td>
                    <td><?= $pesanan->no_identitas ?></td>
                </tr>
                <tr>
                    <th>Nomor HP</th>
                    <td>:</td>
                    <td><?= $pesanan->no_hp ?></td>
                </tr>
                <tr>
                    <th>Tempat Wisata</th>
                    <td>:</td>
                    <td><?= $pesanan->wisata ?></td>
                </tr>
                <tr>
                    <th>Pengunjung Dewasa</th>
                    <td>:</td>
                    <td><?= $pesanan->pengunjung_dewasa ?></td>
                </tr>
                <tr>
                    <th>Pengunjung Anak-Anak</th>
                    <td>:</td>
                    <td><?= $pesanan->pengunjung_anak ?></td>
                </tr>
                <tr>
                    <th>Harga tiket</th>
                    <td>:</td>
                    <td><?= "Rp " . number_format($pesanan->harga_tiket, 0, ",", "."); ?></td>
                </tr>
                <tr>
                    <th>Total Bayar</th>
                    <td>:</td>
                    <td><?= "Rp " . number_format($pesanan->total_harga, 0, ",", "."); ?></td>
                </tr>
            </table>
        </div>
	</div>

	<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>
