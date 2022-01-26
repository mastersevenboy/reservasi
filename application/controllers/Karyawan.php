<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {
	public $status = Array('1'=>'Aktif', '0'=>'Tidak Aktif');
	public function __construct()
    {
		parent::__construct();
		$this->load->model('Model_karyawan');
		if($this->session->userdata('login')!=TRUE){
			redirect('auth'); 
		} 
	}
	public function index()
	{
		$data['title'] 	 ='SIR | Data Karyawan';
		$data['karyawan']=$this->Model_karyawan->DataKaryawan()->result();
		$this->template->display('karyawan/data', $data);
	}
	public function tambah()
	{
		$data['title'] 	 ='SIR | Tambah Karyawan';
		$data['status']= $this->status;
		$this->template->display('karyawan/tambah', $data);
	} 
	public function edit($id)
	{
		if ($id) {
			$data['karyawan'] = $this->Model_karyawan->getData($id)->row();
			$data['title'] 	  ='SIR | Tambah Karyawan';
			$data['status']	  = $this->status;
			$this->template->display('karyawan/edit', $data);
		}
	}
	public function simpan()
	{
		$data['nama'] 		= $this->input->post('nama');
		$data['email']		= $this->input->post('email');
		$data['nohp'] 		= $this->input->post('nohp');
		$data['password'] 	= $this->input->post('password');
		$data['alamat'] 	= $this->input->post('alamat');
		$data['status'] 	= $this->input->post('status');
		$simpan= $this->Model_karyawan->SimpanKaryawan($data);
		if ($simpan) {
		  redirect('karyawan');
		}else{
		  redirect('karyawan/tambah');
		}
	}
	public function update($id)
	{
		$data['id'] 		= $this->input->post('id');
		$data['nama'] 		= $this->input->post('nama');
		$data['email']		= $this->input->post('email');
		$data['nohp'] 		= $this->input->post('nohp');
		if (!empty($this->input->post('password'))) {
			$data['password'] 	= $this->input->post('password');
		}
		$data['alamat'] 	= $this->input->post('alamat');
		$data['status'] 	= $this->input->post('status');
		$update= $this->Model_karyawan->UpdateKaryawan($id, $data);
		if ($update) {
		  redirect('karyawan');
		}else{
		  redirect('karyawan/edit');
		}
	}
	public function hapus($id)
	{
		$hapus= $this->Model_karyawan->deleteKaryawan($id);
		if ($hapus) {
		  redirect('karyawan');
		}
	}
}
