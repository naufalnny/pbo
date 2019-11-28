<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class halamanbuku extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		$db=$this->load->database('default', TRUE);
		if($db->conn_id) {	
			//do something
			//echo 'Connect';
		} else {
			echo 'Unable to connect with database with given db details.';
		}
		
		$page=$this->input->get("id_buku");
		$query='select * from buku where id_buku='.$page;
		$results=$db->query($query);
		//var_dump($result);
		//echo $query;
		
		$data['results']=$results;

		$query2='select * from buku_user where id_buku='.$page;
		$results2=$db->query($query2);
		//var_dump($result);
		//echo $query;
		
		$data['results2']=$results2;

		

		$this->load->view('header2');
		$this->load->view('halaman_buku',$data);

		
	}

	
}
