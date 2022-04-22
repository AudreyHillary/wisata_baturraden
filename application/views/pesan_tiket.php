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
					<li class="nav-item active">
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
		<form class="row" id="formPesan" novalidate>
			<h2 class="col-12 pb-4 text-center text-success">Form Pemesanan</h2>
            <div class="col-12">
                <div class="form-group row">
                    <label for="namaPemesan" class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="namaPemesan" name="namaPemesan" required>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group row">
                    <label for="IDPemesan" class="col-sm-3 col-form-label">Nomor Identitas</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="IDPemesan" name="IDPemesan" required>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group row">
                    <label for="HPPemesan" class="col-sm-3 col-form-label">No. HP</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="HPPemesan" name="HPPemesan" required>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group row">
                    <label for="pilihWisata" class="col-sm-3 col-form-label">Tempat Wisata</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="pilihWisata" name="pilihWisata" required>
                            <option value="" selected>Pilih Wisata</option>
                            <?php foreach($wisata as $data): ?>
                                <option value="<?= $data->id_wisata ?>"><?= $data->name ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group row">
                    <label for="tanggalPemesan" class="col-sm-3 col-form-label">Tanggal Kunjungan</label>
                    <div class="col-sm-9">
                        <input type="date" min="<?= date('Y-m-d') ?>" class="form-control" id="tanggalPemesan" name="tanggalPemesan" required>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group row">
                    <label for="jumlahPengunjung" class="col-sm-3 col-form-label">Pengunjung Dewasa</label>
                    <div class="col-sm-9">
						<input type="number" class="form-control" id="jumlahPengunjung" name="jumlahPengunjung" required>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group row d-flex align-items-center">
                    <label for="jumlahPengunjungAnak" class="col-sm-3 col-form-label">
                        <span>Pengunjung Anak-Anak</span>
                        <span class="small">Usia dibawah umur 12 tahun</span>
                    </label>
                    <div class="col-sm-9">
						<input type="number" class="form-control" id="jumlahPengunjungAnak" name="jumlahPengunjungAnak" required>
                    </div>
                </div>
            </div>
			<div class="col-12">
                <div class="form-group row">
                    <div class="col-4 col-md-3">Harga Tiket</div>
                    <div class="col-8 col-md-9 font-weight-bold py-0" id="hargaTiket">Rp 0</div>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group row">
                    <div class="col-4 col-md-3">Total Bayar</div>
                    <div class="col-8 col-md-9 font-weight-bold py-0" id="totalBayar">Rp 0</div>
                </div>
            </div>
            <div class="col-12 mb-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="checklist" id="checklist" required>
                    <label class="form-check-label" for="checklist">
                        Saya dan/atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan
                    </label>
                </div>
            </div>
            <div class="col-12 col-md-4 my-2">
                <button type="button" id="checkHarga" class="btn btn-warning text-white col-12">Hitung Total Bayar</button>
            </div>
            <div class="col-12 col-md-4 my-2">
                <button type="submit" class="btn btn-success col-12">Pesan Tiket</button>
            </div>
            <div class="col-12 col-md-4 my-2">
                <button type="reset" class="btn btn-secondary col-12">Cancel</button>
            </div>
        </form>
	</div>

	<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.validate.min.js') ?>"></script>
    <script>
        $(document).ready(function(){
            const currency = new Intl.NumberFormat('id-ID');
            $.validator.setDefaults({
				highlight: function(element) {
					$(element).closest('.form-group').addClass('has-error');
				},
				unhighlight: function(element) {
					$(element).closest('.form-group').removeClass('has-error');
				},
				errorElement: 'span',
				errorClass: 'text-danger',
				errorPlacement: function(error, element) {
					if(element.parent('.input-group').length) {
						error.insertAfter(element.parent());
					} else {
						error.insertAfter(element);
					}
				}
			});

			$('#pilihWisata').on('change', function(){
				const wisata = $('#pilihWisata').val();

				if (wisata) {
					$.ajax({
						url: `<?= base_url('check_tiket')?>`,
						type: 'POST',
						async: false,
						data: { wisata }
					}).done(function(data){
						$('#hargaTiket').html(`Rp ${currency.format(data)}`);
					}).fail(function(data){
						console.log(data.responseText);
					});
				}
			})

            $('#checkHarga').click(function(e){
				e.preventDefault();

				const wisata = $('#pilihWisata').val(),
					  jmlPengunjung = $('#jumlahPengunjung').val(),
					  jmlPengunjungAnak = $('#jumlahPengunjungAnak').val();

				if(wisata && jmlPengunjung && jmlPengunjungAnak){
					$.ajax({
						url: `<?= base_url('check_harga') ?>`,
						type: 'POST',
						async: false,
						data: { wisata, jmlPengunjung, jmlPengunjungAnak }
					}).done(function(data){
						$('#totalBayar').html(`Rp ${currency.format(data)}`);
					}).fail(function(data){
						console.log(data.responseText);
						console.log("error");
					});
				}
			})

            $('#formPesan').validate({
                rules:{
                    IDPemesan: { maxlength: 16,minlength: 16 }
                },
                messages:{
                    IDPemesan: { maxlength: "isian salah..data harus 16 digit", minlength: "isian salah..data harus 16 digit" }
                },
                submitHandler: function (form) {
                    let data_form = $(form).serializeArray(),
                        checklist = $('#checklist').is(':checked');

                    data_form.push({name: 'checklist', value: checklist})
                    $.ajax({
                        url: '<?= base_url("simpan_pesanan") ?>',
                        method: 'POST',
                        data: {data_form}
                    }).done(function (data) {
						// console.log(data)
						// data = JSON.parse(data)

                        alert(data);
						location.reload();
                    }).fail(function(data){
						console.log(data.responseText);
						console.log("error");
					});   
                }
            })
        })
    </script>
</body>
</html>
