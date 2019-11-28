<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		//load model "Mahasiswa_model"
        $this->load->model('M_catalog');
		//load library form validation
        $this->load->library('form_validation', 'session');
        $this->load->helper('url', 'form');
    }

    public function index()
	{
    $data['pelanggan'] = $this->db->get_where('pelanggan', ['email'=> $this->session->userdata('email')]) ->row_array();
    $this->load->view('header',$data);
  	$data_product = $this->M_catalog->GetAllProduct();
    $data_shop = $this->M_catalog->GetAllShop();
    $keyword = "Catalog";
    $this->load->view('shop',['data'=>$data_product, 'keyword'=>$keyword, 'shop_data' => $data_shop]);
  	$this->load->view('footer');
    }

}
