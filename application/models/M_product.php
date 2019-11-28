<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_product extends CI_Model {
    public function __construct()
	{
		parent::__construct();

    }

    public function GetOneProduct($nama) {
      $nama = str_replace("-"," ","$nama");
      $nama = str_replace("z","&","$nama");
      $query = $this->db->get_where('buku', array('buku.judulBuku' => $nama));
      return $query->result();
    }

    public function shop_product($nama){
      $nama = str_replace("-"," ","$nama");
      $nama = str_replace("z","&","$nama");
      $this->db->select('*');
      $this->db->from('buku');
      $this->db->join('inventaris','buku.idBuku=inventaris.id_buku');
      $this->db->join('toko','inventaris.id_toko=toko.id_toko');
      $this->db->where('buku.judulBuku',$nama);
      $query=$this->db->get();
      return $query->result();
  }






}
