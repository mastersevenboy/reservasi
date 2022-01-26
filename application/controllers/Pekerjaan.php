<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pekerjaan extends CI_Controller {
	public $status = Array('1'=>'Aktif', '0'=>'Tidak Aktif');
	public function __construct()
    {
		parent::__construct();
		$this->load->model('Model_pekerjaan');
		if($this->session->userdata('login')!=TRUE){
			redirect('auth'); 
		} 
	}
	public function index()
	{
		$data['title'] 	 ='SIR | Data Pekerjaan';
		$data['pekerjaan']=$this->Model_pekerjaan->DataPekerjaan()->result();
		$this->template->display('pekerjaan/data', $data);
	}
	public function tambah()
	{
		$data['title'] 	 ='SIR | Tambah Pekerjaan';
		
		$this->template->display('pekerjaan/tambah', $data);
	}
	public function edit($pekerjaan_id)
	{
		if ($pekerjaan_id) {
			$data['pekerjaan'] = $this->Model_pekerjaan->getData($pekerjaan_id)->row();
			$data['title'] 	  ='SIR | Tambah Pekerjaan';
			
			$this->template->display('pekerjaan/edit', $data);
		}
	}
	public function simpan()
	{
		
		$data['pekerjaan_id'] 	= $this->input->post('pekerjaan_id');
		$data['pekerjaan'] 	= $this->input->post('pekerjaan');
	
		$simpan= $this->Model_pekerjaan->SimpanPekerjaan($data);
		if ($simpan) {
		  redirect('pekerjaan');
		}else{
		  redirect('pekerjaan/tambah');
		}
	}
	public function update($pekerjaan_id)
	{
		$data['pekerjaan_id'] 		= $this->input->post('pekerjaan_id');
		$data['pekerjaan']		= $this->input->post('pekerjaan');
	
		$update= $this->Model_pekerjaan->UpdatePekerjaan($pekerjaan_id,$data);
		if ($update) {
		  redirect('pekerjaan');
		}else{
		  redirect('pekerjaan/edit');
		}
	}
	public function hapus($pekerjaan_id)
	{
		$hapus= $this->Model_pekerjaan->deletePekerjaan($pekerjaan_id);
		if ($hapus) {
		  redirect('pekerjaan');
		}
	}
}
