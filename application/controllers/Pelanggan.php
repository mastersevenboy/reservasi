<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {
	public $status = Array('1'=>'Aktif', '0'=>'Tidak Aktif');
	public function __construct()
    {
		parent::__construct();
		$this->load->model('Model_pelanggan');
		if($this->session->userdata('login')!=TRUE){
			redirect('auth'); 
		} 
	}
	public function index()
	{
		$data['title'] 	 ='SIR | Data Pelanggan';
		$data['pelanggan']=$this->Model_pelanggan->DataPelanggan()->result();
		$this->template->display('pelanggan/data', $data);
	}
	public function tambah()
	{
		$data['title'] 	 ='SIR | Tambah Pelanggan';
		$data['status']= $this->status;
		$this->template->display('pelanggan/tambah', $data);
	}
	public function edit($id)
	{
		if ($id) {
			$data['pelanggan'] = $this->Model_pelanggan->getData($id)->row();
			$data['title'] 	  ='SIR | Tambah Pelanggan';
			$data['status']	  = $this->status;
			$this->template->display('pelanggan/edit', $data);
		}
	}
	public function simpan()
	{
		$data['ktp'] 		= $this->input->post('ktp');
		$data['nama']		= $this->input->post('nama');
		$data['tpt_lahir'] 		= $this->input->post('tpt_lahir');
		$data['tgl_lahir'] 	= $this->input->post('tgl_lahir');
		$data['jk'] 	= $this->input->post('jk');
		$data['alamat'] 	= $this->input->post('alamat');
		$data['kd_agama'] 	= $this->input->post('kd_agama');
		$data['kd_kawin'] 	= $this->input->post('kd_kawin');
		$data['kd_pekerjaan'] 	= $this->input->post('kd_pekerjaan');
		$data['kewarganegaraan'] 	= $this->input->post('kewarganegaraan');
		$data['nohp'] 	= $this->input->post('nohp');
		$data['jumlah_pinjam'] 	= $this->input->post('jumlah_pinjam');
		$data['status'] 	= $this->input->post('status');
		$simpan= $this->Model_pelanggan->SimpanPelanggan($data);
		if ($simpan) {
		  redirect('pelanggan');
		}else{
		  redirect('pelanggan/tambah');
		}
	}
	public function update($id)
	{
		$data['ktp'] 		= $this->input->post('ktp');
		$data['nama']		= $this->input->post('nama');
		$data['tpt_lahir'] 		= $this->input->post('tpt_lahir');
		$data['tgl_lahir'] 	= $this->input->post('tgl_lahir');
		$data['jk'] 	= $this->input->post('jk');
		$data['alamat'] 	= $this->input->post('alamat');
		$data['kd_agama'] 	= $this->input->post('kd_agama');
		$data['kd_kawin'] 	= $this->input->post('kd_kawin');
		$data['kd_pekerjaan'] 	= $this->input->post('kd_pekerjaan');
		$data['kewarganegaraan'] 	= $this->input->post('kewarganegaraan');
		$data['nohp'] 	= $this->input->post('nohp');
		$data['jumlah_pinjam'] 	= $this->input->post('jumlah_pinjam');
		$data['status'] 	= $this->input->post('status');
		$update= $this->Model_pelanggan->UpdatePelanggan($id,$data);
		if ($update) {
		  redirect('pelanggan');
		}else{
		  redirect('pelanggan/tambah');
		}
	}
	public function hapus($id)
	{
		$hapus= $this->Model_pelanggan->deletePelanggan($id);
		if ($hapus) {
		  redirect('pelanggan');
		}
	}
}
