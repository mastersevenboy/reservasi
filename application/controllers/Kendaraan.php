<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kendaraan extends CI_Controller {
	public $status = Array('1'=>'Aktif', '0'=>'Tidak Aktif');
	public function __construct()
    {
		parent::__construct();
		$this->load->model('Model_kendaraan');
		if($this->session->userdata('login')!=TRUE){
			redirect('auth'); 
		} 
	}
	public function index()
	{
		$data['title'] 	 ='SIR | Data Kendaraan';
		$data['kendaraan']=$this->Model_kendaraan->DataKendaraan()->result();
		$this->template->display('kendaraan/data', $data);
	}
	public function tambah()
	{
		$data['title'] 	 ='SIR | Tambah Kendaraan';
		$data['status']= $this->status;
		$this->template->display('kendaraan/tambah', $data);
	}
	public function edit($id)
	{
		if ($id) {
			$data['kendaraan'] = $this->Model_kendaraan->getData($id)->row();
			$data['title'] 	  ='SIR | Tambah Kendaraan';
			$data['status']	  = $this->status;
			$this->template->display('kendaraan/edit', $data);
		}
	}
	public function simpan()
	{
		$data['kendaraan'] 		= $this->input->post('kendaraan');
		$data['plat']		= $this->input->post('plat');
		$data['tahun'] 		= $this->input->post('tahun');
		$data['warna'] 	= $this->input->post('tgl_lahir');
		$data['warna'] 	= $this->input->post('warna');
		$data['tgl_servis'] 	= $this->input->post('tgl_servis');
		$data['harga_reservasi'] 	= $this->input->post('harga_reservasi');
		$data['keterangan'] 	= $this->input->post('keterangan');
		$data['status'] 	= $this->input->post('status');
		$simpan= $this->Model_kendaraan->SimpanKendaraan($data);
		if ($simpan) {
		  redirect('kendaraan');
		}else{
		  redirect('kendaraan/tambah');
		}
	}
	public function update($id)
	{
		$data['kendaraan'] 		= $this->input->post('kendaraan');
		$data['plat']		= $this->input->post('plat');
		$data['tahun'] 		= $this->input->post('tahun');
		$data['warna'] 	= $this->input->post('tgl_lahir');
		$data['warna'] 	= $this->input->post('warna');
		$data['tgl_servis'] 	= $this->input->post('tgl_servis');
		$data['harga_reservasi'] 	= $this->input->post('harga_reservasi');
		$data['keterangan'] 	= $this->input->post('keterangan');
		$data['status'] 	= $this->input->post('status');
		$update= $this->Model_kendaraan->UpdateKendaraan($id,$data);
		if ($update) {
		  redirect('kendaraan');
		}else{
		  redirect('kendaraan/tambah');
		}
	}
	public function hapus($id)
	{
		$hapus= $this->Model_kendaraan->deleteKendaraan($id);
		if ($hapus) {
		  redirect('kendaraan');
		}
	}
}
