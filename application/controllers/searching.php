<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class searching extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		//load model "Mahasiswa_model"
        $this->load->model('M_search');
        $this->load->model('M_catalog');
		//load library form validation
        $this->load->library('form_validation', 'session');
        $this->load->helper('url', 'form');
    }

    public function index()
	{
    $datauser['pelanggan'] = $this->db->get_where('pelanggan', ['email'=> $this->session->userdata('email')]) ->row_array();
        $this->load->view('header',$datauser);
  		$data_product = $this->M_catalog->GetAllProduct();
      $this->load->view('shop',['data'=>$data_product,$datauser]);
  		$this->load->view('footer');
    }

    public function ShowSearch()
    {
      $datauser['pelanggan'] = $this->db->get_where('pelanggan', ['email'=> $this->session->userdata('email')]) ->row_array();
			$keyword = $this->input->post('keyword');
            $data = $this->M_search->get_product_keyword($keyword);
            $data_shop = $this->M_catalog->GetAllShop();
            $this->load->view('header',$datauser);
            if ($keyword == NULL) {
              $keyword = "";
            } else {
              $keyword = "Anda mencari buku '".$keyword."'";
            }
              $this->load->view('shop',['data' =>$data,'keyword' => $keyword,'shop_data'=>$data_shop,$datauser]);
            $this->load->view('footer');
		}

    public function ShopSearch($shop)
    {
      $datauser['pelanggan'] = $this->db->get_where('pelanggan', ['email'=> $this->session->userdata('email')]) ->row_array();
        $data = $this->M_search->search_by_shop($shop);
        $data_shop = $this->M_catalog->GetAllShop();
          foreach ($data as $d) {
            $keyword = "Anda mencari buku di toko '".$d->nama_toko."'";
          }



        $this->load->view('header',$datauser);
        $this->load->view('shop',['data'=>$data,'keyword' => $keyword,'shop_data'=>$data_shop,$datauser]);
        $this->load->view('footer');
    }

}
