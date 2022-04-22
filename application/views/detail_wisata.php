<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Visit Baturraden</title>
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
	<style>
		.paral {
min-height: 600px;
background-attachment: fixed;
background-size: cover;
background-position: 50% 50%;
}

/* Paragrapgh for Parallax Section */ 
.paral p {
font-size: 24px;
color:#f5f5f5;
text-align: center;
line-height: 60px;
}

/* Heading for Parallax Section */ 
.paral h1 {
font-size: 60px;
text-align: center;
padding-top: 60px;
line-height: 100px;
}

		.paralsec {
		background-image: url("<?= base_url('assets/img/'.$wisata->image) ?>");
		}
	</style>
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

	<div class="jumbotron paral paralsec" style="border-radius: 0;">
		<h1 class="font-weight-bold text-white"><?= $wisata->name ?></h1>
        <p>(<?= "Rp " . number_format($wisata->price, 0, ",", "."); ?>/tiket)</p>
	</div>

	<div class="container py-4">
		<div class="row">
			<p class="col-12"><?= $wisata->desc ?></p>
            <iframe class="col-12 pt-3 px-0 card video_detail" height="315" src="<?= $wisata->video ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</div>

	<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>