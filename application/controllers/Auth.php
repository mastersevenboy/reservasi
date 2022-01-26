<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->model('Model_login');
	}
	function index(){
		if ($this->session->userdata('login')==TRUE) {
			redirect('beranda');
		}else{
			$this->load->view('login');
		}
	}
	function check_login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$cek = $this->Model_login->cek_login($email,$password);
		if($cek > 0){
			$data_session = array(
				'id' 	  => $cek->id,
				'nama' 	  => $cek->nama,
				'email'	  => $cek->email,
				'alamat'  => $cek->alamat,
				'nohp'    => $cek->nohp,
				'status'  => $cek->status,
				'login'   => TRUE
				);
			$this->session->set_userdata($data_session);
			redirect('beranda');
		}
		else{
			$data['error'] = 'Username atau Password salah.';
			$this->load->view('login', $data);
		}
	}
	function logout(){
		$this->session->sess_destroy();
		$this->load->view('login');
	}
	function salah(){
		$this->load->view('login');
	}
}