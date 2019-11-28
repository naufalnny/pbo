<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_catalog extends CI_Model {
    public function __construct()
	{
		parent::__construct();


    }

    public function GetAllProduct() {
        $query = $this->db->get('buku');
        return $query->result();
    }

    public function GetAllShop() {
        $query = $this->db->get('toko');
        return $query->result();
    }






}
