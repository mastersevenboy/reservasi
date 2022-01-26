<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perkawinan extends CI_Controller {
	public $status = Array('1'=>'Aktif', '0'=>'Tidak Aktif');
	public function __construct()
    {
		parent::__construct();
		$this->load->model('Model_perkawinan');
		if($this->session->userdata('login')!=TRUE){
			redirect('auth'); 
		} 
	}
	public function index()
	{
		$data['title'] 	 ='SIR | Data Status Kawin';
		$data['perkawinan']=$this->Model_perkawinan->DataPerkawinan()->result();
		$this->template->display('perkawinan/data', $data);
	}
	public function tambah()
	{
		$data['title'] 	 ='SIR | Tambah Status Perkawinan';
		
		$this->template->display('perkawinan/tambah', $data);
	}
	public function edit($kd_sts_kawin)
	{
		if ($kd_sts_kawin) {
			$data['perkawinan'] = $this->Model_perkawinan->getData($kd_sts_kawin)->row();
			$data['title'] 	  ='SIR | Tambah Status Perkawinan';
			
			$this->template->display('perkawinan/edit', $data);
		}
	}
	public function simpan()
	{
		
		$data['kd_sts_kawin'] 	= $this->input->post('kd_sts_kawin');
		$data['status_kawin'] 	= $this->input->post('status_kawin');
		$simpan= $this->Model_perkawinan->SimpanPerkawinan($data);
		if ($simpan) {
		  redirect('perkawinan');
		}else{
		  redirect('perkawinan/tambah');
		}
	}
	public function update($kd_sts_kawin)
	{
		
		$data['kd_sts_kawin'] 	= $this->input->post('kd_sts_kawin');
		$data['status_kawin'] 	= $this->input->post('status_kawin');
		$update= $this->Model_perkawinan->UpdatePerkawinan($kd_sts_kawin,$data);
		if ($update) {
		  redirect('perkawinan');
		}else{
		  redirect('perkawinan/edit');
		}
	}
	public function hapus($kd_sts_kawin)
	{
		$hapus= $this->Model_perkawinan->deletePerkawinan($kd_sts_kawin);
		if ($hapus) {
		  redirect('perkawinan');
		}
	}
}
