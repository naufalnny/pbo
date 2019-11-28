<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
    public function __construct()
	{
		parent::__construct();
		
        
    }

    public function Register() {
        date_default_timezone_set('Asia/Jakarta');
       

        /* Buatlah array dengan nama $data yang berisi Username,Email,Pass dan RegisTime.
            Array tersebut menginputkan data ke table register pada database
            Mengambil inputan dari View/ Landing/Register.php
            dimana : Pass menggunakan md5 = md5($this->input->post('pass')),
            RegisTime menggunakan Date("d-m-Y, H:i:s")
        */

        $data = array(
            "username" => $this->input->POST('name'),
            "email" => $this->input->POST('email'),
            "password" => $this->input->POST('password'),
            "regist" =>Date("m-Y")
        );

        /*if($this->isExist($data['username'])) {
            return false;
        } else {*/
           /* Kondisi else :
            input $data ke table register.
            input Username dan pas dari array $data ke login.
            return true ketika selesai.
             */
            $this->db->insert('user',$data);
            /*$this->db->insert('akun',
            array(
                "name" => $data['name'],
                "email" => $data['email'],
                "pass" => $data['pass']

            ));*/
            return true;
        //}
    }

    public function isExist($username) {
        $this->db->where("username",$username);
        $result = $this->db->get('login')->result_array();
        if(isset($result[0])) {
            return true;
        } else {
            return false;
        }
    }

    public function findUser() {
        

            /* Buat Array berisi Username dan Pass (menggunakan md5)
               yang diambil dari form login pada view.*/

            
            $data = array(
                "email" => $this->input->post('email'),
                "password" => $this->input->post('password')
            );
            //$data = $this->input->post('email');

            /* Cocokkan array $data yang berisi Username dan Password dengan
                data pada table login.
                Menggunakan where($data)

                    Kemudian return menggunakan result_array()                
            */
            $this->db->where($data);
            $result = $this->db->get('user');
            //$result = $this->db->get_where('user',$data);
            return $result->result_array();
  
    }

    public function profile() {
        $cookie = $this->input->cookie('logged');
        $this->db->where($cookie);
        $result = $this->db->get('user');
        return $result->result_array();
    }

    public function editProfile($cookie)
	{
        $data = array(
            "middleName" => $this->input->POST('middleName'),
            "lastName" => $this->input->POST('lastName'),
            "gender" => $this->input->POST('gender'),
            "yearBith" => $this->input->POST('year'),
            "monthBirth" => $this->input->POST('month'),
            "dateBirth" => $this->input->POST('date'),
            "city" => $this->input->POST('city'),
        );
		$this->db->where('email', $cookie);
		$this->db->update('user', $data);
	}

    public function imageUpload($imgName) {
        
        /* Insert file to table image_path folder using ImgName as array */
        $this->db->insert('image_path', array('ImgName' => $imgName));

    }

    public function getImage() {
        return $this->db->get('image_path')->result_array();

        /*Use return to get data from table image_path 
        *clue with result_array() */
    }
}