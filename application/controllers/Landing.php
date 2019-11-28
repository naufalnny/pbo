<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	public function index()
	{
        $page=$this->input->get("page");
		if(!isset($page)){
			$page='Home';
		}
		$this->load->view('header2');
		$this->load->view($page);
    }
    
    public function Register() {
        $data['title'] = "Register";
       

            /*Load view header,Login and Footer from Landing folder.
                Header have a parameter $data.
             */
            $this->load->view('Login');
       
    }

    public function loginPage() {
        
        /*
        1. CREATE COOKIE NAME LOGGED
        2. $data['image'] = ('replace this text to function getImage() in Model/User.php')
        3.LOAD VIEW LOGGEDIN AND USE PARAMETER $DATA */

        $cookie = $this->input->cookie('logged');
        $data['image'] = $this->User->getImage();
        $this->load->view('loggedin', $data);

    }
}