<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		//load model "Mahasiswa_model"
        $this->load->model('M_product');
        $this->load->model('M_product');
		//load library form validation
        $this->load->library('form_validation', 'session');
        $this->load->helper('url', 'form');
    }

    public function index($nama)
	{
    $datauser['pelanggan'] = $this->db->get_where('pelanggan', ['email'=> $this->session->userdata('email')]) ->row_array();
    $this->load->view('header',$datauser);
		$data_product = $this->M_product->GetOneProduct($nama);
    $this->load->view('v_product',['data'=>$data_product]);
		$this->load->view('footer');
    }

    public function productname($nama)
  {
    $datauser['pelanggan'] = $this->db->get_where('pelanggan', ['email'=> $this->session->userdata('email')]) ->row_array();
    $this->load->view('header',$datauser);
    $shop_product = $this->M_product->shop_product($nama);
    $data_product = $this->M_product->GetOneProduct($nama);
    $this->load->view('v_product',['data'=>$data_product, 'shop'=>$shop_product]);
    $this->load->view('footer');
    }
}
