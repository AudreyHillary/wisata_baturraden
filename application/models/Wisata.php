<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata extends CI_Model {
// fungsi untuk menampilkan data wisata 
    public function get_wisata($limit = 0){
        if($limit){
            $this->db->select('*')->from('wisata')->order_by("id_wisata", "desc")->limit($limit);    
        } else {
            $this->db->select('*')->from('wisata')->order_by("id_wisata", "asc");
        }
        $data = $this->db->get();

        return $data->result();
    }
// untuk menampilkan data dari detail wisata berdasarkan id
    public function get_detailwisata($id){
        $data = $this->db->get_where('wisata', ['id_wisata' => $id]);

        return $data->result();
    }
// untuk menampilkan data pesanan
    public function get_pesanan(){
        $data = $this->db->get('pesanan');

        return $data->result();   
    }
// untuk menampilkan data detail pesanan
    public function get_detailpesanan($id){
        $data = $this->db->get_where('pesanan', ['id_pesanan' => $id]);

        return $data->result();
    }

}