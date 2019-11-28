<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_search extends CI_Model {
    public function __construct()
	{
		parent::__construct();


    }

    public function get_product_keyword($keyword){
      $query = $this->db->like('judulBuku',$keyword);
      $query = $this->db->get('buku');
      return $query->result();
  }

  public function search_by_shop($keyword){
    $this->db->select('*');
    $this->db->from('toko');
    $this->db->join('inventaris','toko.id_toko=inventaris.id_toko');
    $this->db->join('buku','inventaris.id_buku=buku.idBuku');
    $this->db->where('toko.id_toko',$keyword);
    $query=$this->db->get();
    return $query->result();
}






}
