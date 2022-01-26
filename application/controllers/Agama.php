<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agama extends CI_Controller {
	public $status = Array('1'=>'Aktif', '0'=>'Tidak Aktif');
	public function __construct()
    {
		parent::__construct();
		$this->load->model('Model_Agama');
		if($this->session->userdata('login')!=TRUE){
			redirect('auth'); 
		} 
	}
	public function index()
	{
		$data['title'] 	 ='SIR | Data Agama';
		$data['agama']=$this->Model_Agama->DataAgama()->result();
		$this->template->display('agama/data', $data);
	}
	public function tambah()
	{
		$data['title'] 	 ='SIR | Tambah Agama';
		
		$this->template->display('agama/tambah', $data);
	}
	public function edit($kd_agama)
	{
		if ($kd_agama) {
			$data['agama'] = $this->Model_Agama->getData($kd_agama)->row();
			$data['title'] 	  ='SIR | Tambah Agama';
			
			$this->template->display('agama/edit', $data);
		}
	}
	public function simpan()
	{
		
		$data['kd_agama'] 	= $this->input->post('kd_agama');
		$data['agama'] 	= $this->input->post('agama');
	
		$simpan= $this->Model_Agama->SimpanAgama($data);
		if ($simpan) {
		  redirect('agama');
		}else{
		  redirect('agama/tambah');
		}
	}
	public function update($kd_agama)
	{
		$data['kd_agama'] 		= $this->input->post('kd_agama');
		$data['agama']		= $this->input->post('agama');
	
		$update= $this->Model_Agama->UpdateAgama($kd_agama,$data);
		if ($update) {
		  redirect('agama');
		}else{
		  redirect('agama/edit');
		}
	}
	public function hapus($kd_agama)
	{
		$hapus= $this->Model_Agama->deleteAgama($kd_agama);
		if ($hapus) {
		  redirect('agama');
		}
	}
}
