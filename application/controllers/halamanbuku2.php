<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class halamanbuku2 extends CI_Controller {

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
		$review=$_GET['review'];
		$rating=$_GET['rating'];
		$id_buku=$_GET['id_buku'];
		$username=$_GET['username'];

		$query="insert into buku_user values('$id_buku','$username','$rating','$review')";
		$results=$db->query($query);
		//var_dump($result);
		$data['results']=$results;
		

		header('Location: http://localhost/tubes/index.php/halamanbuku?id_buku='.$id_buku);
		


		
	}

	
}
