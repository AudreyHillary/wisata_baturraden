<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
// Fungsi untuk memanggil library waktu
	public function __construct()
    {
        parent::__construct();
        date_default_timezone_set("Asia/Jakarta");

		$this->load->model('wisata');
	}
// fungsi untuk memanggil index
	public function index()
	{
		$wisata = $this->wisata->get_wisata(3);

		$this->load->view('index', compact('wisata'));
	}
// fungsi untuk memanggil kelas wisata
	public function wisata(){
		$wisata = $this->wisata->get_wisata();

		$this->load->view('wisata', compact('wisata'));
	}
// fungsi untuk memanggil wisata_detail
	public function wisata_detail($id){
		$wisata = $this->wisata->get_detailwisata($id)[0];

		$this->load->view('detail_wisata', compact('wisata'));
	}
// fungsi untuk memanggil pesan_tiket
	public function pesan_tiket(){
		$wisata = $this->wisata->get_wisata();

		$this->load->view('pesan_tiket', compact('wisata'));
	}
// funsi untuk check_tiket
	public function check_tiket()
	{
		$id_wisata = $this->input->post('wisata');
		$wisata = $this->wisata->get_detailwisata($id_wisata)[0];

		echo $wisata->price;
	}
// fungsi untuk check_harga
	public function check_harga(){
		$id_wisata = $this->input->post('wisata');
		$wisata = $this->wisata->get_detailwisata($id_wisata)[0];

		$jumlah_pengunjung = $this->input->post('jmlPengunjung');
		$jumlah_pengunjunganak = $this->input->post('jmlPengunjungAnak');

		$hargadewasa = $wisata->price*$jumlah_pengunjung;
		$hargaanak = ($wisata->price*0.5)*$jumlah_pengunjunganak;
		$total = $hargadewasa+$hargaanak;

		echo $total;
	}
// fungsi untuk menyimpan pesanan
	public function simpan_pesanan(){
		$data = $this->input->post('data_form');
		$data_input = [];

		foreach($data as $i => $val){
			$data_input[$val['name']] = $val['value'];
		}

		$wisata = $this->wisata->get_detailwisata($data_input['pilihWisata'])[0];

		$hargaanak = ($wisata->price * 0.5) * $data_input['jumlahPengunjungAnak'];
		$hargadewasa = $wisata->price * $data_input['jumlahPengunjung'];
		$total = $hargaanak + $hargadewasa;

		$insert = [
			'name' 					=> $data_input['namaPemesan'],
			'no_identitas' 			=> $data_input['IDPemesan'],
			'no_hp' 				=> $data_input['HPPemesan'],
			'wisata' 				=> $wisata->name,
			'kunjungan' 			=> $data_input['tanggalPemesan'],
			'pengunjung_dewasa' 	=> $data_input['jumlahPengunjung'],
			'pengunjung_anak' 		=> $data_input['jumlahPengunjungAnak'],
			'harga_tiket'			=> $wisata->price,
			'total_harga'			=> $total,
		];

		$result = $this->db->insert('pesanan', $insert);

		if($result){
			echo "Berhasil memesan";
		} else {
			echo "Gagal memesan";
		}
	}
// fungsi untuk menampilkan daftar pesanan
	public function daftar_pesanan(){
		$pesanan = $this->wisata->get_pesanan();

		$this->load->view('daftar_pesanan', compact('pesanan'));
	}
// fungsi untuk menampilkan detail pesanan
	public function detail_pesanan($id){
		$pesanan = $this->wisata->get_detailpesanan($id)[0];

		$this->load->view('detail_pesanan', compact('pesanan'));
	}

}
