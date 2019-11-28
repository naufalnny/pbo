<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserCo extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		//load model "Mahasiswa_model"
        $this->load->model('User');
		//load library form validation
        $this->load->library('form_validation', 'session');
        $this->load->helper('url', 'form');
    }

    public function index()
	{
        $data['pelanggan'] = $this->db->get_where('pelanggan', ['email'=> $this->session->userdata('email')]) ->row_array();
        $this->load->view('header', $data);
        $this->load->view('index');
        $this->load->view('footer');
        /*$page=$this->input->get("page");
		if(!isset($page)){
			$page='Login';
		}
		$this->load->view('header2');
        $this->load->view($page);*/

    }

	public function aboutus()
	{
        $data['pelanggan'] = $this->db->get_where('pelanggan', ['email'=> $this->session->userdata('email')]) ->row_array();
        $this->load->view('header',$data);
        $this->load->view('About');
        $this->load->view('footer');
  }

  public function catalog()
  {
        $data['pelanggan'] = $this->db->get_where('pelanggan', ['email'=> $this->session->userdata('email')]) ->row_array();
        $this->load->view('header',$data);
        $this->load->view('shop');
        $this->load->view('footer');
  }

  public function contact() {
    $data['pelanggan'] = $this->db->get_where('pelanggan', ['email'=> $this->session->userdata('email')]) ->row_array();
    $this->load->view('header',$data);
    $this->load->view('contact');
    $this->load->view('footer');
  }

    //----------------------------------------------------------------------------------------------------------------------------------------
    //----------------------------------------------------Start Register & Login--------------------------------------------------------------
    //----------------------------------------------------------------------------------------------------------------------------------------
    public function register()
    {
      $data['pelanggan'] = $this->db->get_where('pelanggan', ['email'=> $this->session->userdata('email')]) ->row_array();
        $this->load->view('header');
        $this->load->view('register');
        $this->load->view('footer');
    }

    //-------------------------------
    //Function insert ke database
    //-------------------------------
    public function registrasi(){
        $data['pelanggan'] = $this->db->get_where('pelanggan', ['email'=> $this->session->userdata('email')]) ->row_array();
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[pelanggan.email]');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
        'matches' => 'Password tidak sama!',
        'min_length' => 'Password Minimal 3!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[3]|matches[password1]');


        if( $this->form_validation->run() == false){
            $this->load->view('header',$data);
            $this->load->view('register');
            $this->load->view('footer');
        }else{
            $data = [

                'nama_cust' => $this->input->post('nama'),
                'username_cust' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'pass_cust' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),

            ];

            $this->db->insert('pelanggan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert> Anda Berhasil Terdaftar ke OBS </div>');
            $this->load->view('header');
            $this->load->view('login');
            $this->load->view('footer');
        }

    }

    //----------------------------------
    //Function ambil data login session
    //----------------------------------
    public function login() {
        $data['pelanggan'] = $this->db->get_where('pelanggan', ['email'=> $this->session->userdata('email')]) ->row_array();
        $cek = $this->session->userdata('email');
        if ($cek) {
            $this->profile();
        }else{

            $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required|trim');

            if( $this->form_validation->run() == false){
                $this->load->view('header',$data);
                $this->load->view('login');
                $this->load->view('footer');
            }else{
                $email = $this->input->post('email');
                $password= $this->input->post('password');

                $pelanggan = $this->db->get_where('pelanggan', ['email' => $email]) ->row_array();

                if($pelanggan){
                    if (password_verify($password, $pelanggan['pass_cust'])) {
                        $data = [
                            'email' => $pelanggan['email']
                        ];
                        $this->session->set_userdata($data);
                        // redirect(base_url(),'UserCo/profile','refresh');
                        redirect(base_url(), 'refresh');
                    }else{
                        //ga bisa buat alert password salah gua
                        $this->load->view('header',$data);
                        $this->load->view('login');
                        $this->load->view('footer');
                    }
                }else{
                    //ga bisa buat alert email salah gua
                    $this->load->view('header',$data);
                    $this->load->view('login');
                    $this->load->view('footer');
                }
            }
        }
    }



    public function profile(){
        // $page=$this->input->get("email");
        // $query='select * from user where email='.$page;
        // $this->load->view('profile', $page);

        $data['pelanggan'] = $this->db->get_where('pelanggan', ['email'=> $this->session->userdata('email')]) ->row_array();
        $this->load->view('header',$data);
        $this->load->view('profile', $data);
    }

    public function logout(){
        $this->session->unset_userdata('email');
        redirect(base_url('UserCo/login'), 'refresh');
    }

    public function LoginPage(){
        $cookie = $this->input->cookie('logged');
        $page=$this->input->get("page");
        if(!isset($page)){
            $page='Home';
        }
        $this->load->view('header2');
        $this->load->view($page);
    }

    public function LamanEditProfile(){
        $cookie = $this->input->cookie('logged');
        $page=$this->input->get("page");
        if(!isset($page)){
            $page='EditProfile';
        }
        $this->load->view('header2');
        $this->load->view($page);
    }

    public function EditProfile(){
        $cookie = $this->input->cookie('logged');
        if($this->User->editProfile($cookie)) {
            $this->session->set_flashdata('SuccessReg','Success');
        }else {
            $this->session->set_flashdata('falselogin','nodata');
        }
    }
    //----------------------------------------------------------------------------------------------------------------------------------------
    //----------------------------------------------------End Register & Login----------------------------------------------------------------
    //----------------------------------------------------------------------------------------------------------------------------------------

}
